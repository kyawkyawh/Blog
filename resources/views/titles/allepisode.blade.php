@extends('layouts.master')
@section('content')
    <h1 class="text-center" style="padding: 5%">{{$title->title}}</h1>
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
                @foreach ($episodes as $episode)
                <tr>
                    <td class="text-bold-500">{{$episode->name}}</td>
                    <td class="small">{{$episode->created_at}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('edit-episode', ['id'=>$episode->id])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('delete-episode',['id'=>$episode->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
