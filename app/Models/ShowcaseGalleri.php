<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowcaseGalleri extends Model
{
    use HasFactory;

    protected $fillable = [
        'showcase_id',
        'gambar'
    ];

    public function showcase()
    {
        return $this->belongsTo(Showcase::class, 'showcase_id', 'id');
    }
}
