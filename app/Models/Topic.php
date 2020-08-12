<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

    protected $guarded = [];


    public function trailers()
    {
        return $this->belongsTo(Trailer::class);
    }

    public function Guests()
    {
        return $this->belongsTo(Geste::class);
    }

}
