<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'description', 'year', 'duration', 'director', 'cover', 'creation_date', 'update_date'
    ];

    protected $dates = [
        'creation_date', 'update_date'
    ];
}
