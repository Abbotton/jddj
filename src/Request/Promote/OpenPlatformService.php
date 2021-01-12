<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 优惠券类常规接口
 *
 * @package Abbotton\Jddj\Request
 */
class OpenPlatformService extends BaseRequest
{
    /**
     * 线下商家推送领券接口
     *
     * @param array $params
     * @return string
     */
    public function generalActivityGrabCoupon4PlatForm(array $params = [])
    {
        return $this->post('openPlatformService/generalActivityGrabCoupon4PlatForm', $params);
    }
    
    /**
     * 根据优惠券ID查询优惠券信息接口
     *
     * @param array $params
     * @return string
     * @deprecated
     */
    public function queryCouponInfoByCouponId(array $params = [])
    {
        return $this->get('openPlatformService/queryCouponInfoByCouponId', $params);
    }
    
    /**
     * 优惠券商家审批接口
     *
     * @param array $params
     * @return string
     * @deprecated
     */
    public function merchantApproval(array $params = [])
    {
        return $this->post('openPlatformService/merchantApproval', $params);
    }
    
    /**
     * 新版根据优惠券ID查询优惠券信息接口
     *
     * @param array $params
     * @return string
     */
    public function queryCouponInfo(array $params = [])
    {
        return $this->get('openPlatformService/queryCouponInfo', $params);
    }
}