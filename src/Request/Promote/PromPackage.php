<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 组合购促销类常规接口.
 */
class PromPackage extends BaseRequest
{
    /**
     * 组合购促销创建活动接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function openCreateInfo(array $params = [])
    {
        return $this->post('promPackage/openCreateInfo', $params);
    }

    /**
     * 组合购促销激活和取消活动接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function auditPassOrCancelActivity(array $params = [])
    {
        return $this->post('promPackage/auditPassOrCancelActivity', $params);
    }

    /**
     * 组合购促销添加门店接口
     * 京东官方文档拼写错误, `activity` 拼写成了 `acitivity`, 已反馈, 期待改正.
     *
     * @param array $params
     *
     * @return string
     */
    public function openAddActivityStation(array $params = [])
    {
        return $this->post('promPackage/openAddAcitivityStation', $params);
    }

    /**
     * 组合购促销删除门店接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function openDeleteStation(array $params = [])
    {
        return $this->post('promPackage/openDeleteStation', $params);
    }

    /**
     * 组合购促销添加商品接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function openAddActivitySku(array $params = [])
    {
        return $this->post('promPackage/openAddActivitySku', $params);
    }

    /**
     * 组合购促销删除商品接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function openDeleteSku(array $params = [])
    {
        return $this->post('promPackage/openDeleteSku', $params);
    }
}
