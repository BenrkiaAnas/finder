<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Hash;

class UserController extends Controller
{
    //Constructer
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        return view('users.list')->with('users',$users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required'|'string'|'max:255',
            'lastname' => 'required'|'string'|'max:255',
            'email' => 'required'|'string'|'email'|'max:255'|'unique:users',
            'password' => 'required'|'string'|'min:8'|'confirmed',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => 1,
            'status' => 1
        ]);
        return redirect('/users');
    }
}
