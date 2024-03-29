<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pen_name',
        'about',
        'gender',
        'twitter',
        'facebook',
        'instagram',
        'website',
        'phone',
        'address',
        'city',
        'country',
        'zip_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
