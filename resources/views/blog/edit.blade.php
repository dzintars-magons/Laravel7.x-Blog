@extends('layouts.app')

@section('content')

<div class="container">
    <form method="POST" action="{{ url('update-post') }}/ {{ $posts->id }}">
    @csrf
    <div class="form-group col-md-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ $posts->title }}">
    </div>
    <div class="form-group col-md-3">
        <label>Body</label>
        <input type="text" name="body" class="form-control" value="{{ $posts->body }}">
    </div>
    <div class="form-group col-md-12">
        <input type="submit" value="update" class="btn btn-success">
    </div>
    </form>
</div>

@endsection