@extends('layouts.master')
@section("content")
@foreach ($posts as $post)
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <h4 class="card-title mb-0">{{$post->title}}</h4>
        </div>
        <div class="">
            <img src="/image/cover/{{ $post->cover_photo }}" width="full">
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
