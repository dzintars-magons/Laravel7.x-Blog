@extends('layouts.app')

@section('content')

<div class="container">
    <ul>
        @foreach ($posts as $p)
            <li>{{ $p->title }}</li>
            <li>{{ $p->body }}</li>

            @if(Auth::check())
            <a href="{{ url('edit-post') }}/{{ $p->id }}" class="btn btn-warning">Edit</a>
            <a href="{{ url('delete-post') }}/{{ $p->id }}" class="btn btn-outline-danger">Delete</a>
            @endif

            <hr>
        @endforeach
    </ul>
</div>
    
@endsection




    
