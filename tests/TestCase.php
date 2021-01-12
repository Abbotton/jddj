<?php

namespace Abbotton\Jddj\Tests;

use Abbotton\Jddj\Application;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function getApplicationInstance(): Application
    {
        $config = [
            'app_key' => 'foo',
            'app_secret' => 'bar',
            'token' => 'foobar',
        ];

        return new Application($config);
    }
}
