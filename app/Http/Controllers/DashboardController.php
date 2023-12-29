<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::check() && auth()->user()->isStudent()){
            return redirect()->route('student.dashboard');
        } else {
            return redirect()->route('guest.home');
        }
    }
}
