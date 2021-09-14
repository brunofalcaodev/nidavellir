<?php

namespace Nidavellir\Cube\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nidavellir\Abstracts\Classes\AbstractModel;

class Account extends AbstractModel
{
    use HasFactory;

    protected static function newFactory()
    {
        return UserFactory::new();
    }
}
