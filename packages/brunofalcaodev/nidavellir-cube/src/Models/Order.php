<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;
use Nidavellir\Cube\Models\Alert;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Cube\Models\OrderType;
use Nidavellir\Cube\Models\Position;
use Nidavellir\Cube\Models\Quote;
use Nidavellir\Cube\Models\Token;

class Order extends AbstractModel
{
    public function api()
    {
        return $this->belongsTo(Api::class);
    }

    public function token()
    {
        return $this->belongsTo(Token::class);
    }

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    public function orderType()
    {
        return $this->belongsTo(OrderType::class);
    }

    public function alert()
    {
        return $this->hasOne(Alert::class);
    }

    public function position()
    {
        return $this->hasOne(Position::class);
    }
}
