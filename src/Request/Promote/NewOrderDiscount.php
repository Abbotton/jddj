<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 新版优惠券类常规接口
 *
 * @package Abbotton\Jddj\Request
 */
class NewOrderDiscount extends BaseRequest
{
    /**
     * 订单级促销活动取消接口
     *
     * @param array $params
     * @return string
     */
    public function cancelActivity(array $params = [])
    {
        return $this->post('orderdiscount/cancelActivity', $params);
    }
    
    /**
     * 订单级促销活动查询活动提交处理结果接口
     *
     * @param array $params
     * @return string
     */
    public function querySubmitActivityResult(array $params = [])
    {
        return $this->get('orderdiscount/querySubmitActivityResult', $params);
    }
    
    /**
     * 订单级促销活动提交接口
     *
     * @param array $params
     * @return string
     */
    public function submitActivity(array $params = [])
    {
        return $this->post('orderdiscount/submitActivity', $params);
    }
    
    /**
     * 订单级促销活动查询活动列表接口
     *
     * @param array $params
     * @return string
     */
    public function findActivityInfoList(array $params = [])
    {
        return $this->get('orderdiscount/findActivityInfoList', $params);
    }
    
    /**
     * 订单级促销活动查询促销详情接口
     *
     * @param array $params
     * @return string
     */
    public function queryActivityInfo(array $params = [])
    {
        return $this->get('orderdiscount/queryActivityInfo', $params);
    }
    
}