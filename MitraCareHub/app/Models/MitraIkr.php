<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraIkr extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mitra', 'nama', 'kantor_perwakilan',
    ];
}
