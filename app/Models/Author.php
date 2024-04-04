<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Author extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'author';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function novels()
    {
        return $this->hasMany(Novel::class);
    }

}