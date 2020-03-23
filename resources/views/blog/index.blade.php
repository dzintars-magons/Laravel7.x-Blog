@extends('layouts.app')

@section('content')

<div class="container">
    <ul>
        @foreach ($posts as $p)
            <li>{{ $p->title }}</li>
            <li>{{ $p->body }}</li>
            <hr>
        @endforeach
    </ul>
</div>
    
@endsection




    
