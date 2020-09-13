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
        // var_dump($users[0]->);
    }
}
