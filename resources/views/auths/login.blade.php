@extends('auths.master')
@section('title', 'halaman login')
@section('content')
<div class="section-login">
    <div class="box-login">
      @if (session('message'))
      <div class="alert alert-success mt-4" role="alert">
        {{session('message')}}
      </div>
      @endif
      <h2 class="text-center">Silahkan Login</h2>
      <h4 class="text-center">Budget Virtus</h3>
        <hr>
      <form action="{{route('proses.login')}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Username / Email</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username / Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="******">
          </div>
          <button type="submit" class="btn btn-dark btn-block mt-4 mb-3" name="button_login">Login</button>
        <a href="{{route('register')}}" class="link-register" >Belum punya akun? Daftar disini</a>
        </form>
    </div>
  </div>
@endsection