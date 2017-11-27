<?php

namespace App;

/**
 * App\Letter
 *
 * @mixin \Eloquent
 * @property-read \App\Contact $contacts
 */
class Letter extends Model
{
    public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}
