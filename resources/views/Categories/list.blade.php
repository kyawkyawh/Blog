@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-end">
    <a class="btn btn-primary rounded-pill mb-5" href="{{route('create-cate')}}">Create New Category</a>
</div>
    <!-- table head dark -->
    <div class="table-responsive">
        <table class="table table-striped table-dark mb-0">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>Created Time</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cate)
                <tr>
                    <td class="text-bold-500">{{$cate->name}}</td>
                    <td class="small">{{$cate->created_at}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('edit-cate', ['id'=>$cate->id])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('delete-cate',['id'=>$cate->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
