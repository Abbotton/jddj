<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 预售类常规接口
 *
 * @package Abbotton\Jddj\Request
 */
class PreSell extends BaseRequest
{
    /**
     * 预售活动提交保存接口
     *
     * @param array $params
     * @return mixed
     */
    public function confirmPromotion(array $params = [])
    {
        return $this->post('presell/confirmPromotion', $params);
    }

    /**
     * 预售添加活动规则信息接口
     *
     * @param array $params
     * @return mixed
     */
    public function createPromotionRules(array $params = [])
    {
        return $this->post('presell/createPromotionRules', $params);
    }

    /**
     * 预售活动添加主活动信息接口
     *
     * @param array $params
     * @return mixed
     */
    public function createPromotionInfos(array $params = [])
    {
        return $this->post('presell/createPromotionInfos', $params);
    }

    /**
     * 预售整个活动取消接口
     *
     * @param array $params
     * @return mixed
     */
    public function cancelPromotion(array $params = [])
    {
        return $this->post('presell/cancelPromotion', $params);
    }

    /**
     * 预售活动部分商品取消接口
     *
     * @param array $params
     * @return mixed
     */
    public function cancelPromotionSku(array $params = [])
    {
        return $this->post('presell/cancelPromotionSku', $params);
    }

    /**
     * 预售添加活动商品信息接口
     *
     * @param array $params
     * @return mixed
     */
    public function createPromotionSku(array $params = [])
    {
        return $this->post('presell/createPromotionSku', $params);
    }
}