<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title',
        'hero_text',
        'hero_button',
        'carousel_1',
        'carousel_2',
        'carousel_3',
        'section2_title',
        'section2_text',
        'section2_button',
        'section2_image',
    ];
}

