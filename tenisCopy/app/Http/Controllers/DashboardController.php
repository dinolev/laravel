<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('natjecatelji')) {
            return view('natjecateljiDashboard');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('dashboard');
        }
    }

    public function myprofile()
    {
        return view('myprofile');
    }
    public function addNewTournament()
    {
        return view('addNewTournament');
    }
}
