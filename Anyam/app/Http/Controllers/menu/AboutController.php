<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('menu.about');
    }
}
