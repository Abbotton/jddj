<?php

namespace Abbotton\Jddj\Request;

/**
 * 售后类常规接口.
 */
class Afs extends BaseRequest
{
    /**
     * 查询订单是否可售后接口.
     *
     * @param array $params
     * @return string
     */
    public function checkCanApply(array $params = [])
    {
        return $this->get('afsInner/checkCanApply', $params);
    }

    /**
     * 售后单确认收货接口.
     *
     * @param array $params
     * @return string
     */
    public function confirmReceipt(array $params = [])
    {
        return $this->post('afs/confirmReceipt', $params);
    }

    /**
     * 申请售后单审核接口.
     *
     * @param array $params
     * @return string
     */
    public function afsOpenApprove(array $params = [])
    {
        return $this->post('afs/afsOpenApprove', $params);
    }

    /**
     * 查询售后单跟踪日志接口.
     *
     * @param array $params
     * @return string
     */
    public function getServiceLogInfo(array $params = [])
    {
        return $this->get('afs/getServiceLogInfo', $params);
    }

    /**
     * 商家自主发起售后接口.
     *
     * @param array $params
     * @return string
     */
    public function submit(array $params = [])
    {
        return $this->post('afs/submit', $params);
    }

    /**
     * 查询订单申请售后详情接口.
     *
     * @param array $params
     * @return string
     */
    public function getOrderAfsApplyInfo(array $params = [])
    {
        return $this->get('afsInner/getOrderAfsApplyInfo', $params);
    }

    /**
     * 查询订单下售后单信息接口.
     *
     * @param array $params
     * @return string
     */
    public function getAfsSeriveOrderList(array $params = [])
    {
        return $this->get('afs/getAfsSeriveOrderList', $params);
    }

    /**
     * 售后金额计算接口.
     *
     * @param array $params
     * @return string
     */
    public function calcMoney(array $params = [])
    {
        return $this->post('afs/calcMoney', $params);
    }

    /**
     * 查询商家完结售后单列表接口
     * ps: 京东官方文档拼写有误, `getFinalAfsServiceListByCondition` 拼写为 `getFinalAfsServiceListByConditon`, 已反馈, 期待改进.
     *
     * @param array $params
     * @return string
     */
    public function getFinalAfsServiceListByCondition(array $params = [])
    {
        return $this->get('afs/getFinalAfsServiceListByConditon', $params);
    }

    /**
     * 查询售后单详情接口.
     *
     * @param array $params
     * @return string
     */
    public function getAfsService(array $params = [])
    {
        return $this->post('afs/getAfsService', $params);
    }
}
