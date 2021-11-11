@extends('layout.main')

@section('content')
    <nav>
        <ul>
            <li><a href='{{ route("welcome") }}'>Welcome</a></li>
            <li><a href='{{ route("home") }}'>Home</a></li>
        </ul>
    </nav>
@endsection