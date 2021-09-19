<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Nidavellir\Trading\Validators\ApiValidator;

uses(RefreshDatabase::class);

it('api instruction - existing api value', function () {
    expect(ApiValidator::validate('bruno'))->toBeTrue();
});
