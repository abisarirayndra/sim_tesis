<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarSidang extends Model
{
    public $table = "sidangs";

    use HasFactory;

    protected $fillable = [
        'id_mahasiswa',
        'id_pembimbing1',
        'id_pembimbing2',
        'judul',
    ];
}
