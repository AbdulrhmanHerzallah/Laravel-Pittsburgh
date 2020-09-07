<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';


    protected $guarded = [];


    public function trailers()
    {
        return $this->belongsTo(Trailer::class);
    }


}
