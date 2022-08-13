@extends('layouts.master')
@section('content')
    @foreach ($categories as $cate)
    <!-- table head dark -->
    <div class="table-responsive">
        <table class="table mb-0">
            <thead class="thead-dark">
                <tr>
                    <th>NAME</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-bold-500">{{$cate->name}}</td>
                    <td><a href="#"><i
                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                data-feather="mail"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endforeach

@endsection
