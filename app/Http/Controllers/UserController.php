<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

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
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
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

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit')->with('user',$user);

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::find($id);

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/users');
    }

    public function profile()
    {
        return view('account.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::find(Auth::user()->user_id);

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('logout');
    }
}
