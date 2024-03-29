<?php

namespace Abbotton\Jddj\Request;

/**
 * 财务类常规接口.
 */
class Finance extends BaseRequest
{
    /**
     * 查询订单售后计费明细接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function checkAfsBill(array $params)
    {
        return $this->get('bill/checkAfsBill', $params);
    }

    /**
     * 查询订单计费明细接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function checkBill(array $params)
    {
        return $this->get('bill/checkBill', $params);
    }

    /**
     * 查询对账单货款明细接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getBalanceBillDetail(array $params)
    {
        return $this->get('balance/getBalanceBillDetail', $params);
    }

    /**
     * 新版订单金额拆分接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryOassBussMoney(array $params)
    {
        return $this->post('oassBussService/queryOassBussMoney', $params);
    }

    /**
     * 分页查询结算单接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getSettleOrderList(array $params)
    {
        return $this->get('settle/getSettleOrderList', $params);
    }

    /**
     * 分页查询对账单接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getBalanceBillList(array $params)
    {
        return $this->get('balance/getBalanceBillList', $params);
    }

    /**
     * 查询结算单明细接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getSettleOrderDetail(array $params)
    {
        return $this->get('settle/getSettleOrderDetail', $params);
    }

    /**
     * 大商户查询结算单明细文件交互接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getSettleOrderFile(array $params)
    {
        return $this->get('settle/getSettleOrderFile', $params);
    }

    /**
     * 查询日账单压缩文件下载地址接口.
     *
     * @param array $params
     *
     * @return mixed
     */
    public function getBillOrderFileInfo(array $params)
    {
        return $this->get('balance/getBillOrderFileInfo', $params);
    }

    /**
     * 商家开票申请接口接口未更新.
     *
     * @param  array  $params
     *
     * @return mixed
     */
    public function applyInvoice(array $params)
    {
        return $this->get('invoice/applyInvoice', $params);
    }

    /**
     * 查询开票申请详情接口接口未更新.
     *
     * @param  array  $params
     *
     * @return mixed
     */
    public function queryApplyInvoiceDetail(array $params)
    {
        return $this->get('invoice/queryApplyInvoiceDetail', $params);
    }
}
