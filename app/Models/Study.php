<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Study extends Model
{
    use SoftDeletes;
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

    public function subarea()
    {
        return $this->belongsTo(Area::class)->where('type', 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function center()
    {
        return $this->belongsTo(Center::class);
    }
}
