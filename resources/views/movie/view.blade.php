@extends('admin.dashboard')
@section('right')
<div class="container-fluid">
    <h3 class="text-center">View Movie</h3>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{$movie['id']}}</td>
                    <td><img src="{{'/uploads/'.$movie['image']}}" height="100px" width="100px"/></td>
                    <td>{{$movie['title']}}</td>
                    <td>{{$movie['description']}}</td>
                    <td>{{$movie['category']}}</td>
                    <td>{{$movie['date']}}</td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
