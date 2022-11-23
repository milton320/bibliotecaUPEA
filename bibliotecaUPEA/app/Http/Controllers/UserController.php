<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    

    public function show()
    {
        if(Auth::check()){
            return redirect('/libro');
        }
        return view('auth.registro');
    }
    public function registro(UserRequest $request)
    {
        $user = User::create($request->validated());
        return redirect('/login')->with('success', 'Account cereated successfully');
    }
    public function index(){
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }
}
