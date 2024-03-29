<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 多买多折类常规接口.
 */
class OrderDiscount extends BaseRequest
{
    /**
     * 多买生效.
     *
     * @param array $params
     *
     * @return string
     */
    public function auditPassOrCancelActivityNew(array $params = [])
    {
        return $this->post('orderdiscount/auditPassOrCancelActivityNew', $params);
    }

    /**
     * 多买多折删除门店接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function deleteOpStation(array $params = [])
    {
        return $this->post('orderdiscount/deleteOpStation', $params);
    }

    /**
     * 多买多折删除商品
     *
     * @param array $params
     *
     * @return string
     */
    public function deleteOpSku(array $params = [])
    {
        return $this->post('orderdiscount/deleteOpSku', $params);
    }

    /**
     * 多买添加参与活动商品
     * 京东官方文档拼写错误, `activity` 拼写成了 `acitivity`, 已反馈, 期待改正.
     *
     * @param array $params
     *
     * @return string
     */
    public function addOpActivitySkuNew(array $params = [])
    {
        return $this->post('orderdiscount/addOpAcitivitySkuNew', $params);
    }

    /**
     * 多买创建活动基本信息.
     *
     * @param array $params
     *
     * @return string
     */
    public function createOpActivityNew(array $params = [])
    {
        return $this->post('orderdiscount/createOpActivityNew', $params);
    }

    /**
     * 添加参与活动门店New
     * 京东官方文档拼写错误, `activity` 拼写成了 `acitivity`, 已反馈, 期待改正.
     *
     * @param array $params
     *
     * @return string
     */
    public function addOpActivityStationNew(array $params = [])
    {
        return $this->post('orderdiscount/addOpAcitivityStationNew', $params);
    }

    /**
     * 根据到家活动ID查询订单级活动明细接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryActivityInfoById(array $params = [])
    {
        return $this->get('orderdiscount/queryActivityInfoById', $params);
    }

    /**
     * 根据SKUID查询活动接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryActivityInfoBySkuId(array $params = [])
    {
        return $this->get('orderdiscount/queryActivityInfoBySkuId', $params);
    }

    /**
     * 订单级促销活动取消促销门店接口接口未更新.
     *
     * @param  array  $params
     *
     * @return string
     */
    public function cancelStation(array $params = [])
    {
        return $this->get('orderdiscount/cancelStation', $params);
    }

    /**
     * 订单级促销活动追加门店接口接口未更新.
     *
     * @param  array  $params
     *
     * @return string
     */
    public function appendStation4Org(array $params = [])
    {
        return $this->get('orderdiscount/appendStation4Org', $params);
    }

    /**
     * 订单级促销活动追加商品接口接口未更新.
     *
     * @param  array  $params
     *
     * @return string
     */
    public function appendSku4Org(array $params = [])
    {
        return $this->get('orderdiscount/appendSku4Org', $params);
    }

    /**
     * 订单级促销活动取消促销商品接口接口未更新.
     *
     * @param  array  $params
     *
     * @return string
     */
    public function cancelSku(array $params = [])
    {
        return $this->get('orderdiscount/cancelSku', $params);
    }
}
