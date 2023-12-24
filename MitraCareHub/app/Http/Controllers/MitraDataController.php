<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraIkr;
use App\Models\MitraCareHub;

class MitraDataController extends Controller
{
        public function mitradata()
    {
        $mitra = MitraIkr::all();
        $data = MitraCareHub::all();

        return view('welcome', compact('mitra', 'data'));
    }
}
