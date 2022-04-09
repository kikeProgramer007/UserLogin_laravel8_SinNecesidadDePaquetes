<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;            //OCUPAMOS EL MODEL USER

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'The email or password is in incorrect, please try again'
            ]);
        }else{
        }
        return redirect()->to('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
