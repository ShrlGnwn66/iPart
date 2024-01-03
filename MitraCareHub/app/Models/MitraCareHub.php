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
        'report_number', 'name', 'mitra', 'description', 'file', 'status', 'created_at', 'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($mitraCareHub) {
            $mitraCareHub->report_number = static::generateReportNumber();
        });
    }

    protected static function generateReportNumber()
    {
        $prefix = 'A';
        $datePart = now()->format('dmy');
        $maxNumber = static::max('report_number');

        if (!$maxNumber) {
            $maxNumber = $prefix . $datePart . '000';
        }

         $lastNumber = intval(substr($maxNumber, -3));

        // Hitung nomor urut selanjutnya dan ketika 99 akan dikembalikan ke no urut 1
        $nextNumber = $lastNumber + 1;
        $nextNumber = ($nextNumber > 999) ? 1 : $nextNumber;

        return $prefix . $datePart . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
    }
}
