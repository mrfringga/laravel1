@extends('auths.master')
@section('title', 'halaman register')

@section('content')
<div class="section-register">
    <div class="box-register">
      <h2 class="text-center">Form Pendaftaran</h2>
      <h4 class="text-center">Budget Virtus</h3>
        <hr class="mb-4">
      <form action="{{ route('proses.register')}}" method="POST">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="******">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="exampleInputPassword1">Fullname</label>
              <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="Fullname">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
            </div>
          </div>
          <div class="section-btn-daftar">
            <button type="submit" class="btn btn-warning mt-4 mb-3" name="button_register">Daftar Sekarang</button>
          </div>
        <a href="{{route('login')}}" class="link-register">Sudah punya akun ? login disini </a>
        </form>
    </div>
    <div class="box-img">
      <img src="{{url('assets/img/bg-login.jpeg')}}" alt="img-virtus" srcset="">
    </div>
  </div>
@endsection