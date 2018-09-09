<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class userController extends Controller
{
    public function getSignup() {
        return view('user.signup');
    }
    public function postSignup(Request $request) {
        $this->validate($request, [
            'email' => 'email|required|unique:users',//this user if wont work then it needs to confirm to users
            'password' => 'required|min:4'
        ]);

        $user = new user([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        return redirect()->route('product.index');
    }

    public function getSignin() {
        return view('user.signin');
    }

    public function postSignin(Requesr $request) {
        $this->validate($request, [
            'email' => 'email|required|unique:users',//this user if wont work then it needs to confirm to users
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function getProfile() {
        return view('user.profile');
    }
}
