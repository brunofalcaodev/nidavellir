<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;

class Alert extends AbstractModel
{
    public function setHeadersAttribute($value)
    {
        $this->attributes['headers'] =
            is_array($value) ?
            array_to_string($value) :
            $value;
    }

    public function setBodyAttribute($value)
    {
        $this->attributes['body'] =
            is_array($value) ?
            array_to_string($value) :
            $value;
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
