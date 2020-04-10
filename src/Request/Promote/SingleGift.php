<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 单品买赠类常规接口
 *
 * @package Abbotton\Jddj\Request
 */
class SingleGift extends BaseRequest
{
    /**
     * 单品买赠活动提交保存接口
     *
     * @param array $params
     * @return string
     */
    public function confirmPromotion(array $params = [])
    {
        return $this->post('singleGift/confirmPromotion', $params);
    }
    
    /**
     * 单品买赠添加主活动信息接口
     *
     * @param array $params
     * @return string
     */
    public function createPromotionInfos(array $params = [])
    {
        return $this->post('singleGift/createPromotionInfos', $params);
    }
    
    /**
     * 单品买赠整个活动取消接口
     *
     * @param array $params
     * @return string
     */
    public function cancelPromotion(array $params = [])
    {
        return $this->post('singleGift/cancelPromotion', $params);
    }
    
    /**
     * 单品买赠添加活动商品信息接口
     *
     * @param array $params
     * @return string
     */
    public function createPromotionGiftSku(array $params = [])
    {
        return $this->post('singleGift/createPromotionGiftSku', $params);
    }
    
    /**
     * 单品买赠活动部分商品取消接口
     *
     * @param array $params
     * @return string
     */
    public function cancelPromotionSku(array $params = [])
    {
        return $this->post('singleGift/cancelPromotionSku', $params);
    }
    
    /**
     * 单品买赠活动取消赠品接口
     *
     * @param array $params
     * @return string
     */
    public function cancelPromotionGiftSku(array $params = [])
    {
        return $this->post('singleGift/cancelPromotionGiftSku', $params);
    }
}