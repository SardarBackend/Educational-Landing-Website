<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = ['name','subject','email','content'];
    public $timestamps = false;
}
