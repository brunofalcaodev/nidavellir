<?php

namespace Nidavellir\Webhooks\Middleware;

use Closure;
use Illuminate\Http\Request;

class RestrictIps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /**
         * https://www.tradingview.com/support/solutions/43000529348-about-webhooks/.
         */
        $ips = [
            '52.89.214.238',
            '34.212.75.30',
            '54.218.53.128',
            '52.32.178.7', ];

        if (in_array($request->ip(), $this->blockIps)) {
            return $next($request);
        }

        throw new \Exception('This source ip cannot access Nidavellir webhooks');
    }
}
