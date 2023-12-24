<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MitraCareHub extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'mitra_care_hubs';


    protected $fillable = [
        'name', 'mitra', 'description', 'file', 'status', 'created_at', 'updated_at'
    ];
}
