@extends('admin.dashboard')

@section('right')

<div class="container-fluid">
    <h3 class="text-center mt-3">Create Moive</h3>
    <div class="container">
        <div class="row">
            <form enctype="multipart/form-data" method="POST" action="{{url('/course/create')}}">@csrf
                <div class="form-group mb-3">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" />
                </div>
                <div class="form-group mb-3">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" />
                </div>
                <div class="form-group mb-3">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" />
                </div>
                <div class="form-group mb-3">
                    <label>Date</label>
                    <input type="date" class="form-control" name="date" />
                </div>
                <div class="form-group mb-3">
                    <label>Category</label>
                    <input type="text" class="form-control" name="category" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@stop
