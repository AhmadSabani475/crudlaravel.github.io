<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ahmad_rizki_sabani extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'jenis_kelamin'
    ];
    protected $table = 'ahmad_rizki_sabanis';
}
