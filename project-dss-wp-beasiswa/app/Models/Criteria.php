<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory; # Model Code
    # Set Field pada tabel Criteria yang bisa dimasukkan data
    protected $fillable = [
        'nama',
        'tipe',
        'bobot',
    ];
}
