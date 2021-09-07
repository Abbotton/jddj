<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 多买多折类常规接口.
 */
class SecondFold extends BaseRequest
{
    /**
     * 第二件N折活动提交保存接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function confirmPromotion(array $params = [])
    {
        return $this->post('secondFold/confirmPromotion', $params);
    }

    /**
     * 第二件N折添加活动规则信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createPromotionRules(array $params = [])
    {
        return $this->post('secondFold/createPromotionRules', $params);
    }

    /**
     * 第二件N折添加主活动信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createPromotionInfos(array $params = [])
    {
        return $this->post('secondFold/createPromotionInfos', $params);
    }

    /**
     * 第二件N折添加活动商品信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createPromotionSku(array $params = [])
    {
        return $this->post('secondFold/createPromotionSku', $params);
    }

    /**
     * 第二件N折活动部分商品取消接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function cancelPromotionSku(array $params = [])
    {
        return $this->post('secondFold/cancelPromotionSku', $params);
    }

    /**
     * 第二件N折整个活动取消接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function cancelPromotion(array $params = [])
    {
        return $this->post('secondFold/cancelPromotion', $params);
    }
}
