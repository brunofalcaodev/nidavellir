<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;
use Nidavellir\Cube\Models\Api;

class Alert extends AbstractModel
{
    protected $casts = [
        'headers' => 'array',
    ];

    public function api()
    {
        return $this->belongsTo(Api::class);
    }
}
