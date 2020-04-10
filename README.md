## 京东到家 PHP SDK
:clap:京东到家PHP SDK:kissing_heart::kissing_heart:

### 安装
```shell script
composer require abbotton/jddj
```

### 使用
```php
<?php
use Abbotton\Jddj\Application;
......
$config = [
    'app_key' => 'xxx',
    'app_secret' => 'xxx',
    'token' => 'xxx',
    'sandbox' => false
];
$app = new Application($config);
// 获取店铺已上传商品列表
$result = $app->pms->querySkuInfos(['pageNo' => 1, 'pageSize' => 20]);
var_dump($result);
```

### 模块与类的对应关系
| 模块名称 | 对应类 |
| ----: | :---- |
| [售后类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=170) | $app->afs |
| [轻松购](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=203) | $app->easyGoPromotion |
| [财务类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=182) | $app->finance |
| [订单类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=169) | $app->order |
| [商品类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=180) | $app->pms |
| [价格类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=205) | $app->price |
| [库存类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=200) | $app->stock |
| [门店类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=194) | $app->store |
| [工具类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=213) | $app->tool |
| [单品运费促销](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=214) | $app->freightPromote |
| [满减](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=179) | $app->fullCutPromote |
| [拼团类](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=208) | $app->groupActivity |
| [限时抢](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=184) | $app->limitTime |
| [新版订单级促销](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=211) | $app->newOrderDiscount |
| [优惠券](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=207) | $app->openPlatformService |
| [多买多折](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=191) | $app->orderDiscount |
| [组合购](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=209) | $app->promPackage |
| [第二件N折](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=210) | $app->secondFold |
| [单品买赠](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=192) | $app->singleGift |
| [单品直降](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=178) | $app->singlePromote |
| [X元Y件](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=195) | $app->xyPromote |

> [**审计查询模块**](https://openo2o.jddj.com/staticnew/widgets/resources.html?groupid=196)已整合，故不单独列出。

### Change Log
* 2020年4月10日
    - v1.0.0发布 :sparkles:
