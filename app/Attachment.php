<?php

namespace App;


class Attachment extends Model
{
    public function letters()
    {
        return $this->hasMany(Letter::class);
    }    //
}
