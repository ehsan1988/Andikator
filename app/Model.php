<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * App\Model
 *
 * @mixin \Eloquent
 */
class Model extends Eloquent
{
    protected $guarded = [];
}
