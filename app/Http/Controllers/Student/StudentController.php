<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index() {
        if (Auth::guard('student')->user()) {
            return view('layouts.vue');
        } else {
            return Redirect::to('/login');
        }
    }

    public function data() {
        dd(Auth::guard('student')->user());
    }
}
