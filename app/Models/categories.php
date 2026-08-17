<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function categorytable()
    {
        return $this->morphTo();
    }
}
