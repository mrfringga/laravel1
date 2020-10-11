<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function M_User(){
        $users = new User;
        $users = $users->all();
        return view('admin.manag_users.listuser', ['users'=> $users]);
    }
    public function updateUser(Request $request, $id){
        User::where('id', $id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'fullname' => $request->fullname,
            'role_id' => $request->role_id
        ]);
        return redirect(route('admin.user.list'))->with('message', 'Anda berhasil mengupdate user '.$request->username);
    }
    public function showUser($id){
        $user = User::find($id);
        // dd($user->username);
        return view('admin.manag_users.edituser', ['user'=> $user]);
    }
    public function deleteUser($id){
        User::destroy($id);
        return redirect(route('admin.user.list'))->with('message', 'Anda berhasil mengupdate user ');

    }
}
