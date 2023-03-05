<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class HomeController extends Controller

{
    public function index()
    {
                return view('dashboard');
    }
}
