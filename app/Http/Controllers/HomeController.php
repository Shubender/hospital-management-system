<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype === '0') {
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            return view('admin.home');
        }
        return redirect()->back();
    }

    public function index()
    {
        if (Auth::id())
        {
            return redirect('home');
        }

        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
    }
}
