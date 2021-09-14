<?php

use Illuminate\Support\Facades\Route;
use Nidavellir\Webhooks\Controllers\WebhookController;

Route::post('webhook', [WebhookController::class, 'received']);
