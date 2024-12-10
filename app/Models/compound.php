<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class compound extends Model
{
    //
    public function related()
    {
        return $this->belongsToMany(compound::class);
    }
}
