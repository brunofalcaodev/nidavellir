<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;

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
