<?php

namespace App\Http\Controllers;

use App\Models\MitraCareHub;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form (Request $request)
    {
        $validatedData = $request->validate ([
                'name' => 'required',
                'mitra' => 'required',
                'description' => 'required',
                'file' => 'required'
        ]);

        // dd('aaaa');

        MitraCareHub::create($validatedData);

        return redirect('/')->with('success', 'Form successfully submitted!');
    }

}

