<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outpatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_patients',
        'tanggal',
        'lab_no',
    ];
}
