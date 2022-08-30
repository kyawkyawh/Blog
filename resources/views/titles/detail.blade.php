@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-end">
    <a class="btn btn-primary rounded-pill mb-5" href="{{route('create-title')}}">Create New Title</a>
</div>
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-content">
                    <figure>
                        <figcaption><h1 style="padding:8%; background-color: rgb(150, 145, 145); font-size: 32px; font-weight: bold" class="text-center card-title">{{$title->title}}</h1></figcaption>
                        <img class="card-img-top img-fluid" src="{{ asset('image/title/cover/' .$title->cover) }}"
                    alt="Card image cap" style="  display: block; margin-left: auto; margin-right: auto; width: 50%;"/>
                    </figure>
                <div class="card-body">
                    <p class="card-text">
                        <figure>
                            <blockquote>{{$title->description}}</blockquote>
                        </figure>
                    </p>
                    <a href="{{route('show-title',['id'=>$title->id])}}"><button class="btn btn-primary block">View Episodes</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
