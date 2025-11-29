<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    // izinkan field ini diisi pakai create() / update()
    protected $fillable = [
        'name',
        'nbi',
        'description',
        'photo',
    ];
}
