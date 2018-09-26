<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Post;
use App\PostTag;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $bread = ['Dashboard'];

        return view('dashboard.index',compact('bread'));
    }

    public function blog()
    {
        $bread = ['Blog'];
        $posts = Post::all();
        return view('dashboard.blog',compact('bread','posts'));
    }

    public function add_new_post()
    {
        $bread = ['Blog','Add New Post'];
        $tags = Tag::all();

        return view('dashboard.new_post',compact('bread','tags'));
    }

    public function tags(){

        $bread = ['Tags'];

        return view('dashboard.tags',compact('bread'));
    }

    public function get_tags_worker(Request $request)
    {
        $tags = Tag::all();

        return response()->json($tags);

    }

    public function add_tags_worker(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->post('name');
        $tag->save();
        return response()->json($tag);
    }

    public function edit_tags_worker(Request $request)
    {
        $tag = Tag::find($request->post('id'));
        $tag->name = $request->post('name');
        $tag->save();

    }

    public function delete_tags_worker(Request $request)
    {
        Tag::find($request->post('id'))->delete();
    }


    public function add_post_worker(Request $request)
    {
        $post = new Post();
        $post->title = $request->post('title');
        $post->path = $request->post('path');
        $post->type = $request->post('generalType');
        $post->thumbnailType = $request->post('thumbnailType');
        if($request->post('thumbnailType') == 'image'){
            $path = $request->file('thumbnail');
            $imageName =  time().'.'.$path->getClientOriginalExtension();
            $path->move(public_path('/images/post_thumbnails'),$imageName);
            $post->thumbnail = $imageName;
        }else{
            $post->thumbnail = str_replace('watch?v=','embed/', $request->post('thumbnail_video'));
        }
        $post->content = $request->post('content');
        $post->user = Auth::id();
        $post->save();
        $post->tags()->createMany($request->post('customTypes'));
        return redirect()->route('Blog')->with('addStatus', $post->title . ' post is added successfully');
    }

    public function view_post($path)
    {
        $colors = ['#ce2020','#3c81e8','#fda100'];
        $post = Post::with('tags')->where('path', $path)->first();
        $bread = ['Blog',$post->title];
        return view('dashboard.singleBlog',compact('bread','post','colors'));
    }

    public function edit_post($path)
    {
        $tags = Tag::all();
        $post = Post::with('tags')->where('path', $path)->first();
        $bread = [$post->title];
        return view('dashboard.editPost',compact('bread','post','tags'));
    }
}
