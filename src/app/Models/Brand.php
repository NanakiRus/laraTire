<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function model()
    {
        return $this->hasMany(\App\Models\Type::class);
    }
}
