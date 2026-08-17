<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'audio_file',
        'cover_image',
        'duration',
        'language',
        'published_at',
        'play_count',
        'download_count',
        'status',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'published_at' => 'date',
        'duration' => 'integer',
        'play_count' => 'integer',
        'download_count' => 'integer',
    ];

    /**
     * Scope فقط پادکست‌های منتشر شده
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    /**
     * فرمت مدت زمان
     */
    public function getDurationFormattedAttribute(): string
    {
        if (!$this->duration) {
            return '00:00';
        }

        return gmdate('H:i:s', $this->duration);
    }

    /**
     * آدرس کاور
     */
    public function getCoverUrlAttribute(): ?string
    {
        return $this->cover_image
            ? asset('storage/' . $this->cover_image)
            : null;
    }

    public function categories(){
        return $this->morphMany(categories::class , 'categorytable');
    }
    /**
     * آدرس فایل صوتی
     */
    public function getAudioUrlAttribute(): string
    {
        return asset('storage/' . $this->audio_file);
    }

        public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }
}