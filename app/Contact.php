<?php

namespace App;


class Contact extends Model
{
    public function letters()
    {
        return $this->hasMany(Letter::class);
    }    //    //
}
