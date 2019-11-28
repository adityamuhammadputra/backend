<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
        'user_id', 'created_at', 'updated_at'
    ];

    public function details()
    {
        return $this->hasMany(HeaderDetail::class);
    }
}
