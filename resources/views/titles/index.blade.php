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
                    <th>Name</th>
                    <th>Created Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($titles as $title)
                <tr>
                    <td class="text-bold-500">{{$title->title}}</td>
                    <td class="small">{{$title->created_at}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('detail-title', ['id'=>$title->id])}}">Detail</a>
                        <a class="btn btn-warning" href="{{route('edit-title', ['id'=>$title->id])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('delete-title',['id'=>$title->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
