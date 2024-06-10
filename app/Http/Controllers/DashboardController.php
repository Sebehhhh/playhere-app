<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = count(User::all());
        return view('dashboard', compact('userCount'));
    }
}
