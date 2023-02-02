<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'sub_title',
        'description',
        'small_image',
        'big_image',
        'description',
        'client',
        'category',

    ];
}
