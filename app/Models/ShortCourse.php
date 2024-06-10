<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'content',
        'image_url',
        'description',
        'date',
        'time',
        'benefit1',
        'benefit2',
        'benefit3',
    ];
}
