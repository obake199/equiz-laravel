<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function loginPage() {
        if (session('registered')) {
            $registeredmsg = session('registered');
            session()->forget('registered');

            return $registeredmsg;
        }
        return null;
    }

    public function loginCheck(Request $request) {
        $validator = Validator::make(
            array(
                'email'    => $request->email,
                'password' => $request->password
            ),
            array(
                'name'     => 'required',
                'email'    => 'required | email',
                'password' => 'required',
            )
        );
        return Redirect::back()->withErrors(['msg' => 'Email or password you entered is wrong']);
    }

    public function RegisterUser(Request $request) {
        $checkEmail = User::with(array())->where('email', '=', $request->email)->get();
        if (count($checkEmail) > 0) {
            return Redirect::back()->withErrors(['msg' => 'Email already exists.']);
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'new_user' => 0,
            'password' => Hash::make($request->password),
        ]);

        return Redirect('/login')->with(['success' => 'You have successfully registered!']);
    }
}
