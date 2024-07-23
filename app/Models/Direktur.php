<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direktur extends Model
{
    use HasFactory;

    protected $table = 'direktur';

    protected $fillable = [
        'id_direktur',
        'nama',
        'jenis_kelamin',
        'alamat',
    ];
}
