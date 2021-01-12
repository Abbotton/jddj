<?php

namespace Abbotton\Jddj\Request;

use Abbotton\Jddj\Config;

class BaseRequest
{
    private $config;

    private $client;

    public function __construct(Config $config, $client)
    {
        $this->config = $config;
        $this->client = $client;
    }

    public function setRequestUrl($url)
    {
        $this->config->baseUrl = $url;
        return $this;
    }

    protected function get($action, array $options = [])
    {
        $url = $this->config->baseUrl . $action;

        return $this->request('GET', $url, ['query' => $this->getParams($options)]);
    }

    private function request($method, $url, $options = [])
    {
        $method = strtoupper($method);

        $options['headers'] = [
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];

        $response = $this->client->request($method, $url, $options);

        return $response->getBody()->getContents();
    }

    private function getParams(array $options)
    {
        $params = [];
        $params['jd_param_json'] = json_encode($options);
        $params['token'] = $this->config->token;
        $params['app_key'] = $this->config->appKey;
        $params['timestamp'] = date('Y-m-d H:i:s');
        $params['v'] = $this->config->version;
        $params['format'] = $this->config->format;
        $params["sign"] = $this->generateSign($params);

        return $params;
    }

    private function generateSign($params)
    {
        return strtoupper(md5($this->paramsToString($params)));
    }

    private function paramsToString($params)
    {
        ksort($params);

        $sortedString = $this->config->appSecret;
        foreach ($params as $k => &$v) {
            $v = (string)$v;
            if ("sign" !== $k) {
                $sortedString .= "$k$v";
            }
        }

        $sortedString .= $this->config->appSecret;

        return $sortedString;
    }

    protected function post($action, array $params = [])
    {
        $url = $this->config->baseUrl . $action;

        return $this->request('POST', $url, ['form_params' => $this->getParams($params)]);
    }
}