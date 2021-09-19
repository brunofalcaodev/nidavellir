<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;

class Token extends AbstractModel
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
