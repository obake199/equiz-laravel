<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function loginPage() {
        if (session('registered')) {
            $registeredmsg = session('registered');
            session()->forget('registered');

            return $registeredmsg;
        }

        return;
    }

    public function loginCheck(Request $request) {
        dd($request->all());
    }

    public function RegisterAdmin(Request $request) {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        session(['registered' => 'You have successfully registered']);

        return 'success';
    }
}
