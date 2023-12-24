<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraIkr;

class DaftarMitraController extends Controller
{
        public function mitra()
        {
            $mitra = MitraIkr::all();
            return view('welcome', compact('mitra'));
        }

}
