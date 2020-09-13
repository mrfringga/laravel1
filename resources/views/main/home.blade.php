@extends('auths.master')

@section('title', 'halaman home')

@section('content')
    <h2>selamat datang di halaman home</h2>
<a href="{{route('logout')}}" class="btn btn-warning">Logout</a>
@endsection