@extends('admin.master')
@section('title', 'list User')
@section('title-content', 'List User')
@section('body-content')
    <div class="box-container">
        <div class="container">
    <form method="POST" action="/admin/user/update/{{$user->id}}/process">
        @method('PATCH')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
    <label for="username">Username</label>
            <input type="text" class="form-control" value="{{$user->username}}" name="username" id="username">
  </div>
  <div class="form-group col-md-6">
    <label for="email">Email</label>
  <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
  </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="fullname">Fullname</label>
    <input type="text" class="form-control" id="fullname" name="fullname" value="{{$user->fullname}}">
  </div>
  <h1></h1>
  <div class="form-group col-md-6">
    <label for="role_user">Role User</label>
     <select id="role_user" class="form-control" name="role_id">
     <option value="{{$user->role_id}}"selected><?php if($user->role_id == 1){echo "admin";} elseif($user->role_id == 2){echo "Karyawan";}else{echo "User";}?></option>
        <option value="1">Admin</option>
        <option value="2">Karyawan</option>
        <option value="3">User</option>
      </select>
  </div>
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
        </div>
    </div>
@endsection
@push('style')
    <style>
        .box-container{
            background-color: white;
        }
        .exampleModal{
            z-index: 1000;
        }
    </style>
@endpush