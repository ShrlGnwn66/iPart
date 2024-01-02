<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraIkr;
use App\Models\MitraCareHub;

class MitraDataController extends Controller
{
        public function mitradata(Request $request)
    {
        $mitra = MitraIkr::all();
        $data = MitraCareHub::orderBy('created_at', 'desc')->get();
        

        return view('welcome', compact('mitra', 'data'));
    }


    // Search Filter by report number
    public function search(Request $request)
{
    $nomorLaporan = $request->input('nomor_laporan');

    $data = MitraCareHub::query();

    if ($nomorLaporan) {
        $data->where('report_number', $nomorLaporan);
    }

    $result = $data->get();


    return view('welcome', [
        'data' => $result,
        'mitra' => MitraCareHub::all(),
    ]);
}
}
