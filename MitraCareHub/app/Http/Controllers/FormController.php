<?php

namespace App\Http\Controllers;

use App\Models\MitraCareHub;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    // public function form (Request $request)
    // {
    //     $validatedData = $request->validate ([
    //             'name' => 'required',
    //             'mitra' => 'required',
    //             'description' => 'required',
    //             'file' => 'required'
    //     ]);

    //     // dd('aaaa');

    //     MitraCareHub::create($validatedData);

    //     return redirect('/')->with('success', 'Form successfully submitted!');
    // }

    public function form(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required',
        'mitra' => 'required',
        'description' => 'required',
        'file' => 'required',
    ]);

    // Simpan file ke direktori public
    $file = $request->file('file'); // Dapatkan file dari request
    $fileName = $file->getClientOriginalName(); // Dapatkan nama asli file

    // Pindahkan file ke direktori public menggunakan Storage
    $file->storeAs('public', $fileName);

    // Simpan data ke dalam database atau model jika diperlukan
    MitraCareHub::create([
        'name' => $validatedData['name'],
        'mitra' => $validatedData['mitra'],
        'description' => $validatedData['description'],
        'file' => $fileName, // Simpan nama file ke dalam database
    ]);

    return redirect('/')->with('success', 'Akan Segera Ditindak Lanjuti.');
    
}


}

