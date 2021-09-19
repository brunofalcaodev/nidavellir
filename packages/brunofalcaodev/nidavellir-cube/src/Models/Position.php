<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;


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
