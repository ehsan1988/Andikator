<?php

namespace App;

class priority extends Model
{
    public function letters()
    {
        return $this->hasMany(Letter::class);
    }    //    //
}
