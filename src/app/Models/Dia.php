<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $table = 'dia';

    public function size()
    {
        return $this->hasMany(Size::class);
    }
}
