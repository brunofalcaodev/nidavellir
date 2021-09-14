<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Cube\Models\Order;
use Nidavellir\Cube\Models\Quote;
use Nidavellir\Cube\Models\Token;

class Position extends AbstractModel
{
    public function token()
    {
        return $this->belongsTo(Token::class);
    }

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
