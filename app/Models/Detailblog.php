<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailblog extends Model
{  use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'gambar',
        'date',
        'author',
    ];

    public function getRouteKey()
    {
        return 'id';
    }
}
