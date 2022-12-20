<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasFactory; # Model Code
    # Set Field pada tabel Alternative yang bisa dimasukkan data
    protected $fillable = [
        'nama',
        'bobot_k1',
        'bobot_k2',
        'bobot_k3',
        'bobot_k4',
    ];
}
