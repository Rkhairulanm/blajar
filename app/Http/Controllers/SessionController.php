<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Needed',
            'password.required' => 'Password Needed'
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (
            Auth::attempt($login)
        ) {
            return redirect('siswa')->with('success', Auth::user()->name .' Login Done');
        } else {
            return redirect('sesi')->withErrors('Username / Password Not Valid');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('success', 'Logout Done');
    }
    function register(){
        return view('sesi/register');
    }
    function create(Request $request){
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Name Needed',
            'email.required' => 'Email Needed',
            'email.email' => 'Email Not Valid',
            'email.unique' => 'Email Hasbeen Used, please insert a different email',
            'password.required' => 'Password Needed',
            'password.min' => 'Password Minimum 6 Character'
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password,)
        ];

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (
            Auth::attempt($login)
        ) {
            return redirect('siswa')->with('success', Auth::user()->name .' Login Done');
        } else {
            return redirect('sesi')->withErrors('Username / Password Not Valid');
        }
    }
}