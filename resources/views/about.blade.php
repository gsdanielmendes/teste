@extends('layouts.app')
 
@section('title', 'About us')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <h1>About us</h1>

    <p>This is my body content.</p>
@endsection