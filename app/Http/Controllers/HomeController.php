<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype === '0') {
                return view('user.home');
            }
            return view('admin.home');
        }
        return redirect()->back();
    }

    public function index()
    {
        return view('user.home');
    }
}
