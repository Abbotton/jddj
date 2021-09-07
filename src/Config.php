<?php

namespace Abbotton\Jddj;

use Exception;

class Config
{
    public $appKey;
    public $appSecret;
    public $token;
    public $baseUrl = 'https://openapi.jddj.com/djapi/'; // https://opentool.jddj.com/toolapi
    public $format = 'json';
    public $version = 'v1.0';

    public function __construct(array $config = [])
    {
        if (!isset($config['app_key']) || $config['app_key'] == '') {
            throw new Exception('app_key不存在');
        }
        if (!isset($config['app_secret']) || $config['app_secret'] == '') {
            throw new Exception('app_secret不存在');
        }
        if (!isset($config['token']) || $config['token'] == '') {
            throw new Exception('token不存在');
        }

        if (isset($config['sandbox']) && $config['sandbox']) {
            $this->baseUrl = 'https://openapi.jddj.com/mockapi/';
        }

        $this->appKey = $config['app_key'];
        $this->appSecret = $config['app_secret'];
        $this->token = $config['token'];
    }
}
