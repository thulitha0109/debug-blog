@extends('layouts.app')

@section('content')

<div class="col-lg-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            Published Posts
        </div>
        <div class="panel-body">
            <h1 class="text-center">{{$posts_count}}</h1>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="panel panel-danger">
        <div class="panel-heading">
            Trashed Posts
        </div>
        <div class="panel-body">
            <h1 class="text-center">{{$trashed_count}}</h1>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="panel panel-success">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <h1 class="text-center">{{$users_count}}</h1>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            Categories
        </div>
        <div class="panel-body">
            <h1 class="text-center">{{$categories_count}}</h1>
        </div>
    </div>
</div>
    
@endsection
