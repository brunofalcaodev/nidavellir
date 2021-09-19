<?php

namespace Nidavellir\Cube\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nidavellir\Abstracts\Classes\AbstractModel;
use Nidavellir\Database\Factories\ApiFactory;

class Api extends AbstractModel
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exchange()
    {
        return $this->belongsTo(Exchange::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    protected static function newFactory()
    {
        return ApiFactory::new();
    }
}
