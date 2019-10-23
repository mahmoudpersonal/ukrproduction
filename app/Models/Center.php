<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Center extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function city ()
    {
        return $this->belongsTo(City::class)->with('country');
    }
}
