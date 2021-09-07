<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 单品直降类常规接口.
 */
class SinglePromote extends BaseRequest
{
    /**
     * 单品直降活动提交保存接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function confirmPromotion(array $params = [])
    {
        return $this->post('singlePromote/confirmPromotion', $params);
    }

    /**
     * 单品直降添加活动规则信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createPromotionRules(array $params = [])
    {
        return $this->post('singlePromote/createPromotionRules', $params);
    }

    /**
     * 单品直降添加活动商品信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createPromotionSku(array $params = [])
    {
        return $this->post('singlePromote/createPromotionSku', $params);
    }

    /**
     * 单品直降整个活动取消接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function cancelPromotion(array $params = [])
    {
        return $this->post('singlePromote/cancelPromotion', $params);
    }

    /**
     * 单品直降活动部分商品取消接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function cancelPromotionSku(array $params = [])
    {
        return $this->post('singlePromote/cancelPromotionSku', $params);
    }

    /**
     * 单品直降添加主活动信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createPromotionInfos(array $params = [])
    {
        return $this->post('singlePromote/createPromotionInfos', $params);
    }

    /**
     * 根据到家活动ID查询单品级促销活动接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryPromotionInfo(array $params = [])
    {
        return $this->get('singlePromote/queryPromotionInfoMsg', $params);
    }

    /**
     * 根据到家商品ID查询单品级优惠活动列表接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryPromotionSku(array $params = [])
    {
        return $this->get('singlePromote/queryPromotionSku', $params);
    }

    /**
     * 根据到家活动ID查询单品级促销活动商品接口.
     *
     * @param array $params
     *
     * @return mixed
     */
    public function queryPromotionSkuByMinId(array $params = [])
    {
        return $this->post('singlePromote/queryPromotionSkuByMinId', $params);
    }
}
