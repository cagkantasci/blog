@extends('front.layouts.master')
@section('title','Greenland')

@section('content')

<div class="col-md-9 mx-auto">
    @foreach($articles as $article)
    <div class="post-preview">
        <a href="{{route('single',$article->slug)}}">
            <h2 class="post-title">
                {{$article->title}}
            </h2>
            <img class="img-fluid" src="{{$article->image}}" alt="">
            <h3 class="post-subtitle">
                {{str_limit($article->content,75)}}
            </h3>
        </a>
        <p class="post-meta">Kategori:
            <a href="#">{{$article->getCategory->name}}</a>
            <span class="float-right">
                {{$article->created_at->diffForHumans()}}</span>
        </p>

    </div>
    @if(!$loop->last)
    <hr>
    @endif
    @endforeach
    
    <!-- Pager -->
    <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
    </div>
</div>
@include('front.widgets.categoryWidget')
@endsection
