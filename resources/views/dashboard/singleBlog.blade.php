@extends('dashboard.layouts.app')


@section('bread')
    @include('dashboard.modules.breadcrumb')
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            {!! $post->content !!}
        <div class="col-12">
            <h3>Tags</h3>
            @foreach($post->tags as $tag)
                <span class="badge  badge-lg" style="background: {{ $colors[rand(0,count($colors)-1)] }}">{{ $tag->name }}</span>
            @endforeach
        </div>
        </div>
        <div class="col-4">
            @if($post->thumbnailType == 'image')
                <img src="{{ asset('images/post_thumbnails').'/'.$post->thumbnail  }}" alt="">
            @else
                <iframe src="{{ $post->thumbnail }}" frameborder="0" allowfullscreen=""></iframe>
            @endif
        </div>
        <div class="col-2">
            <h3>Post Controller</h3>
            <a  class="btn btn-block btn-success btn-sm" href="{{ route('Post edit',['path'=>$post->path]) }}">Edit</a>
            <a  class="btn btn-block btn-danger btn-sm" href="">Delete</a>
            <a  class="btn btn-block btn-info btn-sm" href="{{url()->previous()}}" >Go Back</a>
        </div>
    </div>

@endsection