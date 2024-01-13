<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        return view('menu.pricing');
    }
}
