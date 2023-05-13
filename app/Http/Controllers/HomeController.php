<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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
                return view('user.home', compact('doctor'));
            }
            return view('admin.home');
        }
        return redirect()->back();
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        }

        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
    }

    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->data = $request->data;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In progress';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('message', 'Appointment request successful. We will contact with you soon.');
    }

    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        }
        return redirect()->back();
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();

        return redirect()->back();
    }
}
