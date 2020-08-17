<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrailerLink extends Model
{
    protected $table = 'trailer_links';

    protected $guarded = [];


    public function trailer()
    {
        return $this->belongsTo(Trailer::class);
    }



}
