@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <h4 class="text-center py-2 mt-2 text-white" style="background-color: #424242">Menus</h4>
            <div class="list-group">
                <a style="background-color: #424242" href="/course/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">Create Movie</h6>
                    </div>
                    </div>
                </a>
                <a style="background-color: #424242" href="/course/view" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">View Movie</h6>
                    </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-9">
            @yield('right')
        </div>
    </div>
</div>
@stop
