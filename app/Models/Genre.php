<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'color',
        'background_color',
        'border_color',
        'text_color',
        'icon',
    ];

    public function novels()
    {
        return $this->belongsToMany(Novel::class, 'novels_genres');
    }
}
