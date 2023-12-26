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
        $data = MitraCareHub::all();
        

        return view('welcome', compact('mitra', 'data'));
    }

    public function search(Request $request)
{
    $namaMitra = $request->input('nama_mitra');
    $namaPelapor = $request->input('nama_pelapor');

    $data = MitraCareHub::query();

    if ($namaMitra) {
        $data->where('mitra', $namaMitra);
    }

    if ($namaPelapor) {
        $data->where('name', 'like', "%$namaPelapor%");
    }

    $result = $data->get();

    return view('welcome', [
        'data' => $result,
        'mitra' => MitraCareHub::all(),
    ]);
}
}
