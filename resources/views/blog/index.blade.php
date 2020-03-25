@extends('layouts.app')

@section('content')

<div class="container">
    <ul class="list-unstyled">
        @foreach ($posts as $p)
            <li><h5>{{ $p->title }}</h5></li>
            <li class="mb-5">{{ $p->body }}</li>
            
                @if(Auth::check())
                <a href="{{ url('edit-post') }}/{{ $p->id }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('delete-post') }}/{{ $p->id }}" class="btn btn-outline-danger">Delete</a>
                @endif
            
            

            <hr>
        @endforeach
    </ul>
</div>
    
@endsection




    
