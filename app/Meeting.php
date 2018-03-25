<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public function staffs()
    {
        $this->belongsToMany(Staff::class);
    }
}
