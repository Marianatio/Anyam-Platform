<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('menu.service.service');
    }

    public function indexfeedback()
    {
        return view('menu.service.feedback');
    }

    public function indexservicedetail(){
        return view('menu.service.servicedetail');
    }
}
