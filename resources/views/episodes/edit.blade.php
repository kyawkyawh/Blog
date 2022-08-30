@extends('layouts.master')
@section('content')
<form class="form" action="{{route('update-episode')}}" method="post">
    @csrf
    <div class="form-body">
        <div class="form-group form-label-group">
            <label for="title" class="sr-only">Episode Name</label>
            <input type="text" value="{{$episode->name}}" class="form-control" name="name">
        </div>
        <div class="form-group form-label-group">
            <textarea class="form-control" id="label-textarea" name="text" rows="8"
                placeholder="Content">{{$episode->text}}</textarea>
            <label for="label-textarea"></label>
        </div>
        <div class="form-group form-label-group">
            <label for="title" class="sr-only">Novel Title</label>
            <select  name="title_id" id="title" required  class="form-select">
                <option value="select title" selected disabled>Select Title</option>
                @foreach ($titles as $title)
                <option value="{{$title->id}}">{{$title->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-actions d-flex justify-content-end">
        <button type="submit" class="btn btn-primary me-1">Submit</button>
        {{-- <button type="reset" class="btn btn-light-primary"><a href="{{route('list-cate')}}">Cancel</a></button> --}}
    </div>
</form>
@endsection
