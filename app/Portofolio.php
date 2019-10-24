<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $guarded = [''];

    public function images()
    {
        return $this->hasMany('App\Image', 'portofolio_id', 'id');
    }
}
