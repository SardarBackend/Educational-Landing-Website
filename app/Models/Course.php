<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'teacher_id',
        'thumbnail',
        'intro_video',
        'price',
        'discount_price',
        'duration_minutes',
        'level',
        'status',
        'students_count',
        'published_at',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'discount_price' => 'decimal:2',
        'published_at' => 'datetime',
        'faq' => 'array',
    ];


    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

        public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function categories(){
        return $this->morphMany(categories::class , 'categorytable');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    */

    public function getFinalPriceAttribute()
    {
        return $this->discount_price ?? $this->price;
    }


    // Course.php
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }


// Course.php
public function favoritedBy()
{
    return $this->belongsToMany(
        User::class,
        'favorite_courses'
    )->withTimestamps();
}

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    public function comment(){
        return $this->morphMany(Comment::class,'commenttable');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

        public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }

    public function instructor()
{
    return $this->belongsTo(User::class, 'user_id');
}
    public function tags(){
        return $this->morphToMany(Tag::class , 'taggable');
    }

}