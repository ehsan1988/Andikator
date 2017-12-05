<?php

namespace App;


class Letter extends Model
{
    public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }

    public function attachments()
    {
        return $this->belongsTo(Attachment::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function nature()
    {
        return $this->belongsTo(Nature::class);
    }
}
