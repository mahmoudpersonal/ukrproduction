<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function centers()
    {
        return $this->hasMany(Center::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
