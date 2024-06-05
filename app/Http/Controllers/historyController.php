<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historyController extends Controller
{
    public function index()
    {
        return view('dashboard.history');
    }
}
