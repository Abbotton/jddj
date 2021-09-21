<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

class OpenPlatformService extends BaseRequest
{
    /**
     * 新版根据优惠券ID查询优惠券信息接口.
     *
     * @param  array  $params
     *
     * @return string
     */
    public function queryCouponInfo(array $params = [])
    {
        return $this->post('openPlatformService/queryCouponInfo', $params);
    }

    /**
     * 优惠券商家审批接口.
     *
     * @param  array  $params
     *
     * @return string
     */
    public function merchantApproval(array $params = [])
    {
        return $this->post('openPlatformService/merchantApproval', $params);
    }
}
