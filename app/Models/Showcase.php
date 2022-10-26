<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'title',
        'description'
    ];

    public function galleries()
    {
        return $this->hasMany(ShowcaseGalleri::class, 'showcase_id', 'id');
    }
}
