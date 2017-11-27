<?php

namespace App;
/**
 * App\Contact
 *
 * @mixin \Eloquent
 * @property-read \App\Letter $letters
 */
class Contact extends Model
{
    public function letters()
    {
        return $this->hasOne(Letter::class);
    }
}
