<?php

namespace App;


class Nature extends Model
{
    public function letters()
    {
        return $this->hasMany(Letter::class);
    }    //    //
}
