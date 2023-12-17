<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heroSection extends Model
{
    // use HasFactory;

    protected $table = 'herosection';

      protected $fillable = [
        'hero_title',
        'hero_desc',
    ];

}
