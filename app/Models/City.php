<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
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
