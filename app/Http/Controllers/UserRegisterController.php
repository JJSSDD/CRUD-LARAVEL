<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRegisterController extends Controller
{
    public function store(Request $request){
            $newUser = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
        ]);
        return redirect(route('user.created'));
    }

    public function login_post(Request $request){
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return redirect()->route('login.index');
        }
            $user = auth()->user();
            if ($user) {
                return redirect()->route('equipo.index');
        }else {
            return redirect()->route('login.index');
            
        }
    
}
    public function logout(){
        auth()->logout();
        return redirect()->route('login.index');
    }
    
}

