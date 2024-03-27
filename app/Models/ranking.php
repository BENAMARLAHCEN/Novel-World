<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function novels()
    {
        return $this->belongsToMany(Novel::class, 'novels_rankings');
    }
}
