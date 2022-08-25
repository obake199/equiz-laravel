<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        dd($request->all());
    }

    public function RegisterAdmin(Request $request) {
        $checkEmail = User::with(array())->where('email', '=', $request->email)->get();
        //dd($checkEmail->get());
        if (count($checkEmail) > 0) {
            return array('error' => true, 'message' => 'Email already exists.');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // session(['registered' => 'You have successfully registered']);

        return 'success';
    }
}
