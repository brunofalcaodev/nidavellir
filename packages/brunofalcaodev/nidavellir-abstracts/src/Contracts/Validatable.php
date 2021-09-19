<?php

namespace Nidavellir\Abstracts\Contracts;

interface Validatable
{
    public function parse();

    public static function validate(string $value);
}
