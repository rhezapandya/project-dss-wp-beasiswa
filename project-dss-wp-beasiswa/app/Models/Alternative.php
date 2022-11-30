<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_alternatif',
        'bobot_kriteria_1',
        'bobot_kriteria_2',
        'bobot_kriteria_3',
        'bobot_kriteria_4',
    ];
}
