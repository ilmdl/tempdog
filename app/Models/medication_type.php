<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medication_type extends Model
{
    //
    public function related()
    {
        return $this->belongsToMany(medication::class);
    }
}
