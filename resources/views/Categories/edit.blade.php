@extends('layouts.master')
@section('content')
<form class="form" action="{{route('update-cate', [$category->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group form-label-group">
            <label for="category" class="sr-only">Category</label>
            <input type="text" class="form-control" value="{{$category->name}}" name="name">
            <input type="hidden" name="id" value="{{$category->id}}">
        </div>
    </div>
    <div class="form-actions d-flex justify-content-end">
        <button type="submit" class="btn btn-primary me-1">Submit</button>
        <button type="reset" class="btn btn-light-primary"><a href="{{route('list-cate')}}">Cancel</a></button>
    </div>
</form>
@endsection
