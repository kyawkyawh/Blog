@extends('layouts.master')
@section("content")
<section class="section">
    <!-- table strip dark -->
    <div class="table-responsive">
        <table class="table table-striped table-dark mb-0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created Time</th>
                    <th>Category</th>
                    <th>Body</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="text-bold-500">{{$post->title}}</td>
                    <td class="small">{{$post->created_at}}</td>
                    <td>{{$post->category->name}}</td>
                    <td><img src="image/cover/{{$post->cover_photo}}" width="100px"></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{route('detail-post', ['id'=>$post->id])}}">Detail</a>
                            <a class="btn btn-warning" href="{{route('edit-post', ['id'=>$post->id])}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('delete-post',['id'=>$post->id])}}">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
