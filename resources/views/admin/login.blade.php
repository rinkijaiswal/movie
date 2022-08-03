@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5 px-5">
    <div class="container px-5">
        <form method="post" action="{{url('/admin/login')}}">@csrf
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email" />
            </div>
            <div class="form-group mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@stop
