<?php

namespace Nidavellir\Coingecko;

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

    public function execute(callable $function)
    {
        try {
            $this->response = $function();
        } catch (\Exception $e) {
            dd($e);
        }
    }

    // ***** Api operations *****
    public function allTickers()
    {
        $client = new CoinGeckoClient();
        $this->execute(function () use ($client) {
            return $client->coins()->getList();
        });

        return $this;
    }
}
