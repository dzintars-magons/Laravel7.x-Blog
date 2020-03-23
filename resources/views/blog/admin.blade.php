@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('save-post') }}">
    @csrf
    <div class="form-group col-md-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control">
        <label>Body</label>
        <input type="text" name="body" class="form-control">
    </div>
    <div class="form-group col-md-12">
        <input type="submit" value="save" class="btn btn-success">
    </div>
</form>
</div>

@endsection