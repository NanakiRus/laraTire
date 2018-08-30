<?php

namespace App\Models;

class Type extends \Illuminate\Database\Eloquent\Model
{
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
