<?php

namespace Abbotton\Jddj\Tests;

use Abbotton\Jddj\Config;

class ConfigTest extends TestCase
{
    public function test_will_get_except_if_app_id_is_not_set()
    {
        try {
            $config = [];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('app_key不存在', $e->getMessage());
        }
    }

    public function test_will_get_except_if_app_secret_is_not_set()
    {
        try {
            $config = [
                'app_key' => 'foo',
            ];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('app_secret不存在', $e->getMessage());
        }
    }

    public function test_will_get_except_if_access_token_is_not_set()
    {
        try {
            $config = [
                'app_key'    => 'foo',
                'app_secret' => 'bar',
            ];
            new Config($config);
        } catch (\Exception $e) {
            $this->assertEquals('token不存在', $e->getMessage());
        }
    }

    public function test_will_get_instance_if_config_is_right()
    {
        $config = [
            'app_key'    => 'foo',
            'app_secret' => 'bar',
            'token'      => 'foobar',
        ];
        $instance = new Config($config);
        $this->assertInstanceOf(Config::class, $instance);
        $this->assertEquals('foo', $instance->appKey);
        $this->assertEquals('bar', $instance->appSecret);
        $this->assertEquals('foobar', $instance->token);
    }
}
