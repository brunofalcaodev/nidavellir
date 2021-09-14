<?php

namespace Nidavellir\Kucoin;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Nidavellir\Abstracts\Contracts\Crawler;
use Nidavellir\Cube\Models\Api;

class CoingeckoCrawler
{
    public static function __callStatic($method, $args)
    {
        return CoingeckoCrawlerService::new()->{$method}(...$args);
    }
}

class CoingeckoCrawlerService implements Crawler
{
    protected $api;
    protected $auth;
    protected $response;

    public function __construct()
    {
        //
    }

    public static function new(...$args)
    {
        return new self(...$args);
    }

    public function withApi(Api $api)
    {
        $this->api = $api;

        return $this;
    }

    public function connect()
    {
        return $this;
    }

    public function response()
    {
        return $this->response;
    }

    // ***** Api operations *****
    public function allTokens()
    {
        $client = new CoinGeckoClient();
    }
}
