<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Error;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function loginPage() {
        
    }

    public function loginCheck(Request $request) {
        $validator = Validator::make(
            array(
                'email'    => $request->email,
                'password' => $request->password
            ),
            array(
                //'name'     => 'required',
                'email'    => 'required | email',
                'password' => 'required',
            )
        );
        if ($validator->fails())
        return Redirect::back()->withErrors(['msg' => 'Email or password you entered is wrong']);
        $user = array(
            'email' => $request->email,
            'password' => $request->password,
        );

        if (Auth::guard('student')->attempt($user)) {
            return Redirect::to('/student/dashboard');
        }
    }

    public function RegisterStudent(Request $request) {
        $checkEmail = Student::with(array())
            ->where('email', '=', $request->email)
            ->orWhere('username', '=', $request->username)
            ->get();
        if (count($checkEmail) > 0) {
            return Redirect::back()->withErrors(['msg' => 'Email already exists.']);
        }
        Student::create([
            'username' => $request->username,
            'fullname' => $request->name,
            'email' => $request->email,
            'new_user' => 0,
            'password' => Hash::make($request->password),
        ]);

        return Redirect('/login')->with(['success' => 'You have successfully registered!']);
    }
}
