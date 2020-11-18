@extends('front.layouts.master')
@section('title',$article->title)
@section('bg',$article->image)
@section('content')

                <div class="col-lg-8 col-md-10 mx-auto">
                    {{$article->content}}
                </div>


    <hr>
                @include('front.widgets.categoryWidget')
@endsection


