<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemCompatibility extends Model
{
    protected $fillable = [
        'name',
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
