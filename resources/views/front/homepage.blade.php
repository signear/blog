@extends('front.layouts.master')
@section('title','Blog Sitesi Anasayfa')
@section('content')
<!-- Main Content -->

        <div class="col-lg-9 col-md-10 mx-auto">
            @foreach($articles as $article)

            <div class="post-preview">
                <a href="{{route('singlePost',[$article->getCategory->slug, $article->slug])}}">
                    <h2 class="post-title">
                        {{$article->title}}
                    </h2>
                    <img src="{{$article->image}}" alt="">
                    <h3 class="post-subtitle">
                        {{Str::limit($article->content,100)}}
                    </h3>
                </a>
                <p class="post-meta">Category:
                    <a href="#">{{$article->getCategory->name}}</a>
                    on {{$article->created_at->diffForHumans()}}</p>
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


