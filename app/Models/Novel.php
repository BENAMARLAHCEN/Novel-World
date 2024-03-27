<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Novel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'status_id',
        'cover',
        'slug',
        'views',
        'status',
        'user_id',
    ];

    // slug mutator

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status()
    {
        return $this->belongsTo(Statu::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function rankings()
    {
        return $this->belongsToMany(Ranking::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getCoverAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }

    public function getPublishedChaptersCountAttribute()
    {
        return $this->chapters()->where('published', true)->count();
    }

    public function getPublishedChaptersAttribute()
    {
        return $this->chapters()->where('published', true)->get();
    }

    public function getFirstChapterAttribute()
    {
        return $this->chapters()->where('published', true)->orderBy('number')->first();
    }

    public function getLatestChapterAttribute()
    {
        return $this->chapters()->where('published', true)->orderByDesc('number')->first();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


}
