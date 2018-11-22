<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
        'name',
        'fluffyness',
    ];

    public function getRouteKeyName()
    {
        return parent::getRouteKeyName();
        return 'name';
    }
}
