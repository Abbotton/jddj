<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 满减类常规接口
 *
 * @package Abbotton\Jddj\Request
 */
class FullCutPromote extends BaseRequest
{
    /**
     * 满减删除门店接口
     *
     * @param array $params
     * @return string
     */
    public function deleteOpenPlatStation(array $params = [])
    {
        return $this->post('fullCutPromote/deleteOpenPlatStation', $params);
    }
    
    /**
     * 满减删除商品接口
     *
     * @param array $params
     * @return string
     */
    public function deleteOpenPlatSku(array $params = [])
    {
        return $this->post('fullCutPromote/deleteOpenPlatSku', $params);
    }
    
    /**
     * 创建活动基本信息接口
     *
     * @param array $params
     * @return string
     */
    public function createOpenPlatActivityBasicInfo(array $params = [])
    {
        return $this->post('fullCutPromote/createOpenPlatActivityBasicInfo', $params);
    }
    
    /**
     * 满减生效或取消活动接口
     *
     * @param array $params
     * @return string
     */
    public function auditPassOrCancelActivity(array $params = [])
    {
        return $this->post('fullCutPromote/auditPassOrCancelActivity', $params);
    }
    
    /**
     * 满减添加活动商品接口
     * 京东官方文档拼写错误, `activity` 拼写成了 `acitivity`, 已反馈, 期待改正
     *
     * @param array $params
     * @return string
     */
    public function addOpenPlatActivitySku(array $params = [])
    {
        return $this->post('fullCutPromote/addOpenPlatAcitivitySku', $params);
    }
    
    /**
     * 满减添加门店接口
     * 京东官方文档拼写错误, `activity` 拼写成了 `acitivity`, 已反馈, 期待改正
     *
     * @param array $params
     * @return string
     */
    public function addOpenPlatActivityStation(array $params = [])
    {
        return $this->post('fullCutPromote/addOpenPlatAcitivityStation', $params);
    }
}