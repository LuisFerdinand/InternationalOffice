<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExchange extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image_url',
        'content',
        'time',
        'program_details',
        'date',
        'benefit',
        'description',
    ];
}
