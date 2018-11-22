<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    public function getRouteKeyName()
    {
        return parent::getRouteKeyName();
        return 'name';
    }
}
