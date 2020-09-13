<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auths/register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auths/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prosesRegister(Request $request)
    {
       $user = new User;
       $user->username = $request->username;
       $user->password = Hash::make($request->password);
       $user->email = $request->email;
       $user->fullname =  $request->fullname;
       $user->role_id = 3;
       $user->save();
        return redirect(route('login'))->with('message', 'Anda berhasil register');
    }

    public function prosesLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->username, 'password' => $request->password])|| Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            if(auth()->user()->role_id === 1){
                return redirect(route('admin.dasboard'));
            }
            return redirect(route('main.home'));
        }else{
            return redirect(route('login'))->with('message', 'password anda salah');
        }
        // dd($request->username);
    //    $user = User::where('username', $request->username)->first();
    //    if (Hash::check($request->password, $user->password)) {
    //         return redirect(route('main.home'));
    //     }else{
    //         return redirect(route('login'))->with('message', 'password anda salah');
    //     }
        // return redirect(route('login'))->with('message', 'Anda berhasil register');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
