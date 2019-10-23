<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $guarded = ['id'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function area($type = null)
    {
        if ($type != null)
            return $this->belongsTo(Area::class)->where('type', 1)->get();
        return $this->belongsTo(Area::class)->where('type', 0);
    }
}
