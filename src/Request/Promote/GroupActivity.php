<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 拼团类常规接口.
 */
class GroupActivity extends BaseRequest
{
    /**
     * 到家小程序拼团促销活动取消接口.
     *
     * @param array $params
     * @return string
     */
    public function cancelGroupActivity(array $params = [])
    {
        return $this->post('groupActivity/cancelGroupActivity', $params);
    }

    /**
     * 到家小程序拼团促销活动部分商品取消接口.
     *
     * @param array $params
     * @return string
     */
    public function cancelGroupSku(array $params = [])
    {
        return $this->post('groupActivity/cancelGroupSku', $params);
    }

    /**
     * 到家小程序拼团促销活动创建接口.
     *
     * @param array $params
     * @return string
     */
    public function createGroupActivity(array $params = [])
    {
        return $this->post('groupActivity/createGroupActivity', $params);
    }
}
