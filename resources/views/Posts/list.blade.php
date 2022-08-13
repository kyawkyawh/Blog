@extends('layouts.master')
@section("content")
@foreach ($posts as $post)
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <h4 class="card-title mb-0">{{$post->title}}</h4>
            <small>{{$post->category->name}}</small>
        </div>
        <div class="">
            <img src="/image/cover/{{ $post->cover_photo }}" width="100%" height="50%">
        </div>
        <div class="card-body">
            <p class="card-text">
                {{$post->body}}
            </p>
        </div>
    </div>
</div>
@endforeach


@endsection
