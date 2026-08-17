<?php

namespace App\Models;

use App\ProductAttributeValues;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;

    public function categories(){
        return $this->morphMany(categories::class , 'categorytable');
    }
    public function gallery(){
        return $this->hasMany(gallery::class);
    }
    public function questions()
    {
        return $this->morphMany(Question::class, 'questionable');
    }
    public function comment(){
        return $this->morphMany(comment::class , 'commenttable');
    }
    public function attribute () {
        return $this->belongsToMany(Attributes::class,'attribute_book')->using(ProductAttributeValues::class)->withPivot('value_id');
    }
}