<?php

namespace Nidavellir\Webhooks\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class WebhookController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Called when a new TradingView alert is triggered.
     *
     * @return void
     */
    public function received(Request $request)
    {
        /**
         * 1. Register the call, no matter if it's well registered or not.
         * 2. Make the necessary data validations.
         * 3. Execute order (buy, sell).
         * 4. Obtain all the information regarded to the token/exchange.
         */
        $headers = $request->header();
    }
}
