<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    protected $guarded = [];



    public function topic()
    {
        return $this->hasOne(Topic::class);
    }

    public function guest()
    {
        return $this->hasMany(Geste::class);
    }



}
