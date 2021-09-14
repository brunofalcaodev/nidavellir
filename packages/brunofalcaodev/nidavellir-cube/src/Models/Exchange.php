<?php

namespace Nidavellir\Cube\Models;

use Nidavellir\Abstracts\Classes\AbstractModel;

class Exchange extends AbstractModel
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function apis()
    {
        return $this->hasMany(Api::class);
    }
}
