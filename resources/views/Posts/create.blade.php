@extends('layouts.master')
@section('content')

<form action="{{route('store-cate')}}" method="post">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label for="feedback1" class="sr-only">Category</label>
            <input type="text" id="feedback1" class="form-control"
                placeholder="Title" name="name">
        </div>
    </div>
</form>
<form class="form" action="{{route('store-post')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label for="feedback1" class="sr-only">Title</label>
            <input type="text" id="feedback1" class="form-control"
                placeholder="Title" name="title">
        </div>
        <div class="form-group form-label-group">
            <textarea class="form-control" id="label-textarea" name="body" rows="8"
                placeholder="Content"></textarea>
            <label for="label-textarea"></label>
        </div>
        <div class="form-group form-label-group">
            <label for="cover_photo" class="sr-only">Cover Photo</label>
            <input type="file" class="form-control" name="cover_photo">
        </div>
    </div>
    <div class="form-actions d-flex justify-content-end">
        <button type="submit" class="btn btn-primary me-1">Submit</button>
        <button type="reset" class="btn btn-light-primary"><a href="{{route('posts')}}">Cancel</a></button>
    </div>
</form>
@endsection
