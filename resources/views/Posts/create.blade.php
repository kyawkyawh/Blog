@extends('layouts.master')
@section('content')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/vendors/choices.js/choices.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
<link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">
@endsection
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
        <div class="form-group form-label-group">
            <label for="category" class="sr-only">Category</label>
            <select onchange="javascript:handleSelect(this)" name="category_id" id="category" required  class="form-select">
                <option value="select category" selected disabled>Select Category</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                <option value="{{route('create-cate')}}">
                    <a href="{{route('create-cate')}}">Create Category</a>
                </option>
            </select>
        </div>
    </div>
    <div class="form-actions d-flex justify-content-end">
        <button type="submit" class="btn btn-primary me-1">Submit</button>
        <button type="reset" class="btn btn-light-primary"><a href="{{route('posts')}}">Cancel</a></button>
    </div>
</form>
@endsection
@section('scripts')
    <script type="text/javascript">
        function handleSelect(elm){
            if(elm.value.length >= 30)
                window.location = elm.value
        }
    </script>
@endsection
