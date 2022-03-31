<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');



    }

    public function message()
    {
        if(Auth::user())
        {
            if(Auth::user()->is_admin)
            {
                $messages = Contact::orderBy('created_at', 'DESC')->get();

                return view('AdminLTE.messages', compact('messages'));
            }
        }
        else
        {
            return redirect()->back();
        }

    }

    public function createAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required|integer|min:4',
            'email' => 'required|unique:users'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => true,
            'password' => Hash::make('admin001'),
        ]);

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/login');
    }
}
