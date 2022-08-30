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
                    <th>Novel Title</th>
                    <th>Created Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($episodes as $episode)
                <tr>
                    <td class="text-bold-500">{{$episode->name}}</td>
                    {{-- @php
                        $title = App\Models\Title::find($episode->title_id);
                    @endphp --}}
                    <td>{{$episode->title->title}}</td>
                    <td class="small">{{$episode->created_at}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('edit-episode', ['id'=>$episode->id])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('delete-episode', ['id'=>$episode->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
