<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show () {
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request) {
            $user = User::create($request->validated());
            //redirigimos al usuario al login para crearse una cuenta
            return redirect('/login')->with('satisfactorio', 'cuenta creada satisfactoriamente');
    }
}
