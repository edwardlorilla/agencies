<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
    public function sic()
    {
        return $this->belongsTo(Sic::class);
    }

}
