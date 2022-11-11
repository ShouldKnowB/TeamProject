<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table= 'categories';

    protected $fillable = [
         'name',
        'slug',
        'description',
        'image',
        'meta-title',
        'meta-keyword',
        'meta-description',
        'status',

    ];
}


