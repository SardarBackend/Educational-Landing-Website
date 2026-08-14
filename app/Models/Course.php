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
}