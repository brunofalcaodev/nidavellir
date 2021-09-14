<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Cube\Models\Order;

class Alert extends AbstractModel
{
    protected $casts = [
        'headers' => 'array',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
