<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    public $fillable = ['user_id','questionable_type','questionable_id','question','answer','parent_id'];
        public function questionable()
    {
        return $this->morphTo();
    }
    public function parent()
    {
        return $this->belongsTo(Question::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Question::class, 'parent_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
