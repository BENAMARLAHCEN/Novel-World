<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    use HasFactory;

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
        return $this->hasMany(Novel::class);
    }
}
