@extends('admin.master')
@section('title', 'list User')
@section('title-content', 'List User')
@section('body-content')
    <div class="box-container">
        <div class="container">
            <h3 class="title">management user</h3>
                @if (session('message'))
                <div class="alert alert-success mt-4" role="alert">
                    {{session('message')}}
                </div>
                @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role User</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)    
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if ($user->role_id == 1)
                            {{'admin'}}
                        @elseif ($user->role_id == 2)
                            {{'karyawan'}}
                        @else ($user->role_id == 2)
                            {{'user'}}
                        @endif
                    </td>
                    <td>
                        <a href="/admin/user/update/{{$user->id}}" class="btn btn-light"><i class="fas fa-edit"></i></a>
                        <form class="btn-delete" method="POST" action="/admin/user/delete/{{$user->id}}">
                            @method("DELETE")
                            @csrf
                        <button type="submit" onclick="return confirm('do you want to delete the user ?')" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
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
        i.fa-trash-alt{
            color: #fff;
        }
        .btn-delete{
            display: inline;
        }
    </style>
@endpush