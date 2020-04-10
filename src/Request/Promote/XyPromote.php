<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * X元Y件类常规接口
 *
 * @package Abbotton\Jddj\Request
 */
class XyPromote extends BaseRequest
{
    /**
     * 创建X元Y件活动基本信息
     *
     * @param array $params
     * @return string
     */
    public function createOpenActivityXy(array $params = [])
    {
        return $this->post('xyPromote/createOpenActivityXy', $params);
    }
    
    /**
     * X元Y件生效/取消活动接口
     *
     * @param array $params
     * @return string
     */
    public function auditPassOrCancelActivityXy(array $params = [])
    {
        return $this->post('xyPromote/auditPassOrCancelActivityXy', $params);
    }
    
    /**
     * X元Y件活动添加门店接口
     * 京东官方文档拼写错误, `activity` 拼写成了 `acitivity`, 已反馈, 期待改正
     *
     * @param array $params
     * @return string
     */
    public function addOpActivityXyStationNew(array $params = [])
    {
        return $this->post('xyPromote/addOpAcitivityXyStationNew', $params);
    }
    
    /**
     * X元Y件活动删除商品接口
     *
     * @param array $params
     * @return string
     */
    public function deleteOpXySku(array $params = [])
    {
        return $this->post('xyPromote/deleteOpXySku', $params);
    }
    
    /**
     * X元Y件添加参与活动商品接口
     * ps: 京东官方文档拼写错误, `activity` 拼写成了 `acitivity`, 已反馈, 期待改正
     *
     * @param array $params
     * @return string
     */
    public function addOpActivityXySkuNew(array $params = [])
    {
        return $this->post('xyPromote/addOpAcitivityXySkuNew', $params);
    }
    
    /**
     * X元Y件活动删除门店接口
     *
     * @param array $params
     * @return string
     */
    public function deleteOpXyStation(array $params = [])
    {
        return $this->post('xyPromote/deleteOpXyStation', $params);
    }
}