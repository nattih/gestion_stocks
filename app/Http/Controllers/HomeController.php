<?php

namespace App\Http\Controllers;

use App\User;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function accueil()
    {
    $categories=Categorie::all();
        return view('Appgestion', compact('categories'));
    }

    // public function showRegistrationForm()
    // {
    //     return view('auth.register');
    // }
    public function user_store(){
        $data=request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
          ]);
          User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
            return redirect()->back();
    }
}
