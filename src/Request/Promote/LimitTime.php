<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 限时抢类常规接口.
 */
class LimitTime extends BaseRequest
{
    /**
     * 限时抢活动提交保存接口.
     *
     * @param array $params
     * @return string
     */
    public function confirmPromotion(array $params = [])
    {
        return $this->post('limitTime/confirmPromotion', $params);
    }

    /**
     * 限时抢添加活动规则信息接口.
     *
     * @param array $params
     * @return string
     */
    public function createPromotionRules(array $params = [])
    {
        return $this->post('limitTime/createPromotionRules', $params);
    }

    /**
     * 限时抢添加活动主信息接口.
     *
     * @param array $params
     * @return string
     */
    public function createPromotionInfos(array $params = [])
    {
        return $this->post('limitTime/createPromotionInfos', $params);
    }

    /**
     * 限时抢添加活动商品信息接口.
     *
     * @param array $params
     * @return string
     */
    public function createPromotionSku(array $params = [])
    {
        return $this->post('limitTime/createPromotionSku', $params);
    }

    /**
     * 限时抢活动取消部分商品接口.
     *
     * @param array $params
     * @return string
     */
    public function cancelPromotionSku(array $params = [])
    {
        return $this->post('limitTime/cancelPromotionSku', $params);
    }

    /**
     * 限时抢整个活动取消接口.
     *
     * @param array $params
     * @return string
     */
    public function cancelPromotion(array $params = [])
    {
        return $this->post('limitTime/cancelPromotion', $params);
    }
}
