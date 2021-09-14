<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;
use Nidavellir\Cube\Models\Exchange;

class Token extends AbstractModel
{
    public function exchange()
    {
        return $this->belongsTo(Exchange::class);
    }
}
