<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classTable extends Model
{
    protected $fillable = [
        "name",
        "subjects_id",
        "mark",
    ];
}
