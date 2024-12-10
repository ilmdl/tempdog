<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class challange extends Model
{
    //
    public function related()
    {
        return $this->belongsToMany(User::class);
    }
}
