<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceControler extends Controller
{
    public function index()
    {
        return view('price.index');
    }
}
