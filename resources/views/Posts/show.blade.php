@extends('layouts.master')
@section("content")
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
        <div class="card-footer">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{route('posts')}}">Back</a>
                <a class="btn btn-warning" href="{{route('edit-post', ['id'=>$post->id])}}">Edit</a>
                <a class="btn btn-danger" href="{{route('delete-post',['id'=>$post->id])}}">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection
