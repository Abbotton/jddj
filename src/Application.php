<?php

namespace Abbotton\Jddj;

use Abbotton\Jddj\Request\Afs;
use Abbotton\Jddj\Request\Finance;
use Abbotton\Jddj\Request\Order;
use Abbotton\Jddj\Request\Pms;
use Abbotton\Jddj\Request\Price;
use Abbotton\Jddj\Request\Promote\FreightPromote;
use Abbotton\Jddj\Request\Promote\FullCutPromote;
use Abbotton\Jddj\Request\Promote\GroupActivity;
use Abbotton\Jddj\Request\Promote\LimitTime;
use Abbotton\Jddj\Request\Promote\NewOrderDiscount;
use Abbotton\Jddj\Request\Promote\OpenPlatformService;
use Abbotton\Jddj\Request\Promote\OrderDiscount;
use Abbotton\Jddj\Request\Promote\PreSell;
use Abbotton\Jddj\Request\Promote\PromPackage;
use Abbotton\Jddj\Request\Promote\SecondFold;
use Abbotton\Jddj\Request\Promote\SingleGift;
use Abbotton\Jddj\Request\Promote\SinglePromote;
use Abbotton\Jddj\Request\Promote\XyPromote;
use Abbotton\Jddj\Request\Stock;
use Abbotton\Jddj\Request\Store;
use Abbotton\Jddj\Request\Tool;
use Exception;
use GuzzleHttp\Client;

/**
 * Class Application.
 *
 * @property Afs              $afs
 * @property Finance          $finance
 * @property Order            $order
 * @property Pms              $pms
 * @property Price            $price
 * @property Stock            $stock
 * @property Store            $store
 * @property Tool             $tool
 * @property FreightPromote   $freightPromote
 * @property FullCutPromote   $fullCutPromote
 * @property GroupActivity    $groupActivity
 * @property LimitTime        $limitTime
 * @property NewOrderDiscount $newOrderDiscount
 * @property OrderDiscount    $orderDiscount
 * @property OpenPlatformService    $openPlatformService
 * @property PromPackage      $promPackage
 * @property SecondFold       $secondFold
 * @property SingleGift       $singleGift
 * @property SinglePromote    $singlePromote
 * @property XyPromote        $xyPromote
 * @property PreSell          $preSell
 */
class Application
{
    private $config;
    /**
     * @var Client
     */
    private $client;

    public function __construct($config)
    {
        $this->config = new Config($config);
        $this->client = new Client();
    }

    public function setHttpClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function __get($name)
    {
        if (! isset($this->$name)) {
            $class_name = ucfirst($name);
            $application = "\\Abbotton\\Jddj\\Request\\{$class_name}";
            if (! class_exists($application)) {
                $application = "\\Abbotton\\Jddj\\Request\\Promote\\{$class_name}";
            }
            if (! class_exists($application)) {
                throw new Exception($class_name.'不存在');
            }
            $this->$name = new $application($this->config, $this->client);
        }

        return $this->$name;
    }
}
