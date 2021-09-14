<?php

namespace Nidavellir\Abstracts\Classes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class AbstractModel extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
