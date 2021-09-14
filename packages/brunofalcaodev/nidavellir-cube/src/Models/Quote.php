<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;
use Nidavellir\Cube\Models\Order;
use Nidavellir\Cube\Models\Position;

class Quote extends AbstractModel
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
