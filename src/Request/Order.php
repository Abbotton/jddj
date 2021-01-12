<?php

namespace Abbotton\Jddj\Request;

/**
 * 订单类常规接口.
 */
class Order extends BaseRequest
{
    /**
     * 商家审核用户取消申请接口.
     *
     * @param array $params
     * @return string
     */
    public function orderCancelOperate(array $params = [])
    {
        return $this->post('ocs/orderCancelOperate', $params);
    }

    /**
     * 订单已打印接口.
     *
     * @param array $params
     * @return string
     */
    public function printOrder(array $params = [])
    {
        return $this->post('bm/open/api/order/printOrder', $params);
    }

    /**
     * 商家确认接单接口.
     *
     * @param array $params
     * @return string
     */
    public function orderAcceptOperate(array $params = [])
    {
        return $this->post('ocs/orderAcceptOperate', $params);
    }

    /**
     * 订单取消且退款接口.
     *
     * @param array $params
     * @return string
     */
    public function cancelAndRefund(array $params = [])
    {
        return $this->post('orderStatus/cancelAndRefund', $params);
    }

    /**
     * 拣货完成且顾客自提接口.
     *
     * @param array $params
     * @return string
     */
    public function orderSelfMention(array $params = [])
    {
        return $this->post('bm/open/api/order/OrderSelfMention', $params);
    }

    /**
     * 拣货完成且众包配送接口.
     *
     * @param array $params
     * @return string
     */
    public function orderJDZBDelivery(array $params = [])
    {
        return $this->post('bm/open/api/order/OrderJDZBDelivery', $params);
    }

    /**
     * 拣货完成且商家自送接口
     * ps: 京东官方文档拼写有误, `Seller`拼写为`Serller`, 已反馈, 期待后续改进.
     *
     * @param array $params
     * @return string
     */
    public function orderSellerDelivery(array $params = [])
    {
        return $this->post('bm/open/api/order/OrderSerllerDelivery', $params);
    }

    /**
     * 订单妥投接口.
     *
     * @param array $params
     * @return string
     */
    public function deliveryEndOrder(array $params = [])
    {
        return $this->post('ocs/deliveryEndOrder', $params);
    }

    /**
     * 商家审核配送员取货失败接口.
     *
     * @param array $params
     * @return string
     */
    public function receiveFailedAudit(array $params = [])
    {
        return $this->post('order/receiveFailedAudit', $params);
    }

    /**
     * 订单调整接口.
     *
     * @param array $params
     * @return string
     */
    public function adjustOrder(array $params = [])
    {
        return $this->post('orderAdjust/adjustOrder', $params);
    }

    /**
     * 拣货完成且达达同城配送接口.
     *
     * @param array $params
     * @return string
     * @deprecated
     */
    public function orderDDTCDelivery(array $params = [])
    {
        return $this->post('bm/open/api/order/OrderDDTCDelivery', $params);
    }

    /**
     * 订单达达配送转商家自送接口.
     *
     * @param array $params
     * @return string
     */
    public function modifySellerDelivery(array $params = [])
    {
        return $this->post('order/modifySellerDelivery', $params);
    }

    /**
     * 根据订单号查询订单跟踪接口.
     *
     * @param array $params
     * @return string
     */
    public function getByOrderNoForOaos(array $params = [])
    {
        return $this->get('orderTrace/getByOrderNoForOaos', $params);
    }

    /**
     * 新版根据订单号查询订单跟踪接口.
     *
     * @param array $params
     * @return string
     */
    public function getByOrderNoForOaosNew(array $params = [])
    {
        return $this->get('orderTrace/getByOrderNoForOaosNew', $params);
    }

    /**
     * 商家确认收到拒收退回.
     *
     * @param array $params
     * @return string
     */
    public function confirmReceiveGoods(array $params = [])
    {
        return $this->post('order/confirmReceiveGoods', $params);
    }

    /**
     * 取货失败后催配送员抢单接口.
     *
     * @param array $params
     * @return string
     */
    public function urgeDispatching(array $params = [])
    {
        return $this->post('bm/urgeDispatching', $params);
    }

    /**
     * 订单商家加小费接口.
     *
     * @param array $params
     * @return string
     */
    public function addTips(array $params = [])
    {
        return $this->post('order/addTips', $params);
    }

    /**
     * 应结金额接口.
     *
     * @param array $params
     * @return string
     */
    public function orderShoudSettlementService(array $params = [])
    {
        return $this->get('bill/orderShoudSettlementService', $params);
    }

    /**
     * 订单自提码核验接口.
     *
     * @param array $params
     * @return string
     */
    public function checkSelfPickCode(array $params = [])
    {
        return $this->post('ocs/checkSelfPickCode', $params);
    }

    /**
     * 商家处理配送员取货异常上报接口.
     *
     * @param array $params
     * @return string
     */
    public function handleReport(array $params = [])
    {
        return $this->post('order/handleReport', $params);
    }

    /**
     * 根据订单号查看配送员取货异常上报订单处理详情接口.
     *
     * @param array $params
     * @return string
     */
    public function getHandleReportRecord(array $params = [])
    {
        return $this->get('order/getHandleReportRecord', $params);
    }

    /**
     * 根据订单号查询用药人信息接口.
     *
     * @param array $params
     * @return string
     */
    public function getOrderPrescriptionInfo(array $params = [])
    {
        return $this->get('order/es/getOrderPrescriptionInfo', $params);
    }

    /**
     * 订单处方药审核结果接口.
     *
     * @param array $params
     * @return string
     */
    public function internetHospitalAudit(array $params = [])
    {
        return $this->post('ocs/internetHospitalAudit', $params);
    }

    /**
     * 商家投诉达达配送员.
     *
     * @param array $params
     * @return string
     */
    public function complaintDadaDeliverForPlatForm(array $params = [])
    {
        return $this->post('bm/open/api/order/complaintDadaDeliverForPlatForm', $params);
    }

    /**
     * 虚拟订单审核接口.
     *
     * @param array $params
     * @return string
     */
    public function virtualOrderAudit(array $params = [])
    {
        return $this->post('ocs/virtualOrderAudit', $params);
    }

    /**
     * 绑定第三方运单号接口.
     *
     * @param array $params
     * @return string
     */
    public function bandThirdDeliverNoApiPlatform(array $params = [])
    {
        return $this->post('ocs/bandThirdDeliverNoApiPlatform', $params);
    }

    /**
     * 订单列表查询接口.
     *
     * @param array $params
     * @return string
     */
    public function query(array $params = [])
    {
        return $this->get('order/es/query', $params);
    }

    /**
     * 订单发送延迟配送的申请接口.
     *
     * @param array $params
     * @return mixed
     */
    public function sendDeliveryDelay(array $params = [])
    {
        return $this->post('ocs/sendDeliveryDelay', $params);
    }

    /**
     * 订单绑定取货位.
     *
     * @param array $params
     * @return mixed
     */
    public function bindTakeDeliverPosition(array $params = [])
    {
        return $this->post('ocs/modifyOrderService/bindTakeDeliverPosition', $params);
    }
}
