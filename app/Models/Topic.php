<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

    protected $guarded = [];



    public function trailer()
    {
        return $this->belongsTo(Trailer::class);
    }


}
