<?php

namespace Nidavellir\Kucoin;

use KuCoin\SDK\Auth;
use KuCoin\SDK\KuCoinApi;
use Nidavellir\Abstracts\Contracts\Crawler;

class KucoinCrawler
{
    public static function __callStatic($method, $args)
    {
        return KucoinCrawlerService::new()->{$method}(...$args);
    }
}

class KucoinCrawlerService implements Crawler
{
    public function __construct()
    {
        if (env('KUCOIN_SANDBOX') == '1') {
            KuCoinApi::setBaseUri('https://openapi-sandbox.kucoin.com');
        }
    }

    public static function new(...$args)
    {
        return new self(...$args);
    }

    public function allTokens()
    {
    }

    public function connect()
    {
        $this->connection = new Auth('key', 'secret', 'passphrase', Auth::API_KEY_VERSION_V2);

        return $this;
    }
}
