<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function dia()
    {
        return $this->belongsTo(Dia::class);
    }
}
