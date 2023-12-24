<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraIkr;

class HomeController extends Controller
{
    public function index ()
    {
        return view('welcome');
    }


}
