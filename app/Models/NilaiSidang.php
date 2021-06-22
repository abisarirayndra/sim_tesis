<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSidang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nrp',
        'posisi',
        'nilai_a',
        'nilai_b',
        'nilai_c',
    ];
}
