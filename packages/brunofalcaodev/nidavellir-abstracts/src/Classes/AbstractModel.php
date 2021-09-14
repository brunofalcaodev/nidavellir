<?php

namespace Nidavellir\Abstracts\Classes;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{
    protected $guarded = [];
}
