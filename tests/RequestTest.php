<?php

namespace Abbotton\Jddj\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

class RequestTest extends TestCase
{
    public function test_all_requests_will_return_the_correct_response()
    {
        $mock = new MockHandler();
        $handlerStack = new HandlerStack($mock);
        $client = new Client(['handler' => $handlerStack]);
        $app = $this->getApplicationInstance()->setHttpClient($client);

        $responseJson = $this->getResponseJson();
        $classArray = ['afs', 'easyGoPromotion', 'finance', 'order', 'pms', 'price', 'stock', 'store', 'tool', 'freightPromote', 'fullCutPromote', 'groupActivity', 'limitTime', 'newOrderDiscount', 'openPlatformService', 'orderDiscount', 'promPackage', 'secondFold', 'singleGift', 'singlePromote', 'xyPromote', 'preSell'];
        foreach ($classArray as &$class) {
            $reflectionClass = new \ReflectionClass($app->$class);
            $methods = $reflectionClass->getMethods();
            foreach ($methods as &$method) {
                if (
                    $method->class == 'Abbotton\\Jddj\\Request\\'.ucfirst($class)
                    || $method->class == 'Abbotton\\Jddj\\Request\\Promote\\'.ucfirst($class)
                ) {
                    $response = new Response(200, [], $responseJson);
                    $mock->append($response);
                    $methodName = $method->getName();
//                    var_dump($methodName);continue;
                    $result = $app->$class->$methodName(['foo' => 'bar']);
                    $this->assertSame($responseJson, $result);
                }
            }
        }
    }

    private function getResponseJson()
    {
        return <<<'JSON'
{
	"code": "0",
	"msg": "操作成功",
	"data": {
		"success": true,
		"code": "0",
		"msg": "操作成功",
		"result": []
	}
}
JSON;
    }
}
