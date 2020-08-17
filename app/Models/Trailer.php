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

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function iframes()
    {
        return $this->hasMany(Iframe::class);
    }

    public function gestes()
    {
        return $this->hasMany(GesteModel::class);
    }

    public function links()
    {
        return $this->hasMany(TrailerLink::class);
    }


}
