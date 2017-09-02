<?php

namespace Cidery;

use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    public function inventory()
    {
        return $this->hasMany('Cidery\ChemicalInventory');
    }
}
