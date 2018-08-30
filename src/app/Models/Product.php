<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function dia()
    {
        return $this->hasOne(Dia::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function size()
    {
        return $this->hasOne(Size::class);
    }

    public function wear()
    {
        return $this->hasOne(Wear::class);
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    public function type()
    {
        return $this->hasOne(Type::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
