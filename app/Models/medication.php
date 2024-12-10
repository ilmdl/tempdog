<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medication extends Model
{
    //
    public function related()
    {
        return [$this->belongsToMany(medication_type::class),$this->belongsToMany(compound::class),$this->belongsToMany(User::class)];
    }
}
