<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function meetings()
    {
        $this->belongsToMany(Meeting::class);
    }
}
