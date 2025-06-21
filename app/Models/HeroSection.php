<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model {
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'counter_one',
        'counter_title_one',
        'counter_two',
        'counter_title_two',
        'counter_three',
        'counter_title_three',
        'counter_four',
        'counter_title_four'
    ];
}
