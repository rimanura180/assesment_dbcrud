<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\DosenController;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'jabatan'
    ];

}
