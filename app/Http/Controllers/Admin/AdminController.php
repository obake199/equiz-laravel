<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminRoutes(){
        // if not logged in, go to log in page
        if (!Auth::guard('lecturer')->check())
            return redirect('/admin/login');
    }
}
