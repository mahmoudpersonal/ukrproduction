<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function studies()
    {
        return $this->hasMany(Study::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
