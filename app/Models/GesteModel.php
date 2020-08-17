<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GesteModel extends Model
{

    protected $table = 'gestes';
    protected $guarded = [];


    public function trailer()
    {
        return $this->belongsTo(Trailer::class);
    }



}
