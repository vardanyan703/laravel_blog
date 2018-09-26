@extends('dashboard.layouts.app')

@section('bread')
    @include('dashboard.modules.breadcrumb')
@endsection

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="row justify-content-between">
                <div class="col-3">
                    <h1>All Posts</h1>
                </div>
                <div class="col-3">
                    <a href="{{ route('add new post') }}" class="btn btn-app bg-olive btn-block">
                        <i class="fa fa-bullhorn"></i> Add New Post
                    </a>
                </div>
            </div>
        </div>
        @if(session('addStatus'))
        <div class="col-12">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> {{ session('addStatus') }}
            </div>
        </div>
        @endif

        @foreach($posts as $post)
            @if($post->thumbnailType == 'image')
            <div class="col-md-6">
                <div class="box">
                    <figure class="img-hov-zoomin">
                        <img src="{{asset('images/post_thumbnails').'/'.$post->thumbnail }}" alt="">
                    </figure>
                    <div class="box-body">
                        <h4><a href="{{ route("Single Post",['path'=>$post->path]) }}">{{ $post->title }}</a></h4>
                        <p><time>{{ $post->created_at }}</time></p>

                        {!! str_limit($post->content, 400)!!}

                        <div class="flexbox align-items-center mt-3">
                            <a class="btn btn-round btn-bold btn-primary" href="#">Read more</a>

                          {{--  <div class="gap-items-4">
                                <a class="text-muted" href="#">
                                    <i class="fa fa-heart mr-1"></i> 12
                                </a>
                                <a class="text-muted" href="#">
                                    <i class="fa fa-comment mr-1"></i> 3
                                </a>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="col-md-6">
                    <div class="box">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="{{ $post->thumbnail }}" frameborder="0" allowfullscreen=""></iframe>
                        </div>

                        <div class="box-body">
                            <h4><a class="hover-primary" href="#">{{ $post->title }}</a></h4>
                            <p><time>{{ $post->created_at }}</time></p>

                            {!! str_limit($post->content,400) !!}

                            <div class="flexbox align-items-center mt-3">
                                <a class="btn btn-round btn-bold btn-primary" href="#">Read more</a>

                                {{--<div class="gap-items-4">
                                    <a class="text-muted" href="#">
                                        <i class="fa fa-heart mr-1"></i> 12
                                    </a>
                                    <a class="text-muted" href="#">
                                        <i class="fa fa-comment mr-1"></i> 3
                                    </a>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection