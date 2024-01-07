<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProdiController;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim', 'jurusan'
    ];
}
