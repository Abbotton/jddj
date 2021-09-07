<?php

namespace Abbotton\Jddj\Request;

/**
 * 库存类常规接口.
 */
class Stock extends BaseRequest
{
    /**
     * 根据商家商品编码和商家门店编码更新门店现货库存接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function update(array $params = [])
    {
        return $this->post('stock/update', $params);
    }

    /**
     * 根据到家商品编码更新门店单个商品缺货状态接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateStockoutBySkuId(array $params = [])
    {
        return $this->post('stock/updateStockoutBySkuId', $params);
    }

    /**
     * 根据到家商品编码批量更新门店商品缺货状态接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateStockoutListBySkuId(array $params = [])
    {
        return $this->post('stock/updateStockoutListBySkuId', $params);
    }

    /**
     * 根据商家商品编码和商家门店编码批量修改现货库存接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function batchUpdateCurrentQtys(array $params = [])
    {
        return $this->post('stock/batchUpdateCurrentQtys', $params);
    }

    /**
     * 根据到家商品编码和到家门店编码批量更新锁定库存接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateOpenLockQtys(array $params = [])
    {
        return $this->post('stock/updateOpenLockQtys', $params);
    }

    /**
     * 根据到家商品编码、到家门店编码更新门店现货库存.
     *
     * @param array $params
     *
     * @return string
     */
    public function currentQty(array $params = [])
    {
        return $this->post('update/currentQty', $params);
    }

    /**
     * 根据到家商品编码和到家门店编码批量修改门店商品可售状态接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateVendibility(array $params = [])
    {
        return $this->post('stock/updateVendibility', $params);
    }

    /**
     * 根据商家商品编码更新门店单个商品缺货状态接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateStockoutByOutSkuId(array $params = [])
    {
        return $this->post('stock/updateStockoutByOutSkuId', $params);
    }

    /**
     * 根据商家商品编码批量更新门店商品缺货状态
     *
     * @param array $params
     *
     * @return string
     */
    public function updateStockoutListByOutSkuId(array $params = [])
    {
        return $this->post('stock/updateStockoutListByOutSkuId', $params);
    }

    /**
     * 根据商家商品编码和门店编码批量修改门店商品可售状态接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function batchUpdateVendibility(array $params = [])
    {
        return $this->post('stock/batchUpdateVendibility', $params);
    }

    /**
     * 根据商家商品编码单个更新可售状态接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateVendibility4SingleByOutsideSkuId(array $params = [])
    {
        return $this->post('stock/updateVendibility4SingleByOutsideSkuId', $params);
    }

    /**
     * 根据到家商品编码单个更新可售状态接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateVendibility4SingleBySkuId(array $params = [])
    {
        return $this->post('stock/updateVendibility4SingleBySkuId', $params);
    }

    /**
     * 根据到家商品编码和门店编码批量查询商品库存及可售状态信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryOpenUseable(array $params = [])
    {
        return $this->get('stock/queryOpenUseable', $params);
    }

    /**
     * 根据商家商品编码和门店编码批量查询商品库存及可售状态信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryStockCenter(array $params = [])
    {
        return $this->get('stock/queryStockCenter', $params);
    }

    /**
     * （新）哥伦布仓储库存变更增量接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function merchantOrderOut(array $params = [])
    {
        return $this->post('wms/merchantOrderOut', $params);
    }

    /**
     * 哥伦布仓储库存变更增量接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateWmsStock4Inc(array $params = [])
    {
        return $this->post('wms/updateWmsStock4Inc', $params);
    }

    /**
     * 哥伦布仓储库存变更存量接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateWmsStock4Rem(array $params = [])
    {
        return $this->post('wms/updateWmsStock4Rem', $params);
    }

    /**
     * 哥伦布仓储库存全量查询接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getStockListForMerchant(array $params = [])
    {
        return $this->get('wms/getStockListForMerchant', $params);
    }

    /**
     * 商家下单预占库存接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createMerchantOrder(array $params = [])
    {
        return $this->post('wms/createMerchantOrder', $params);
    }

    /**
     * 哥伦布商家取消订单返还预占接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function orderCancel(array $params = [])
    {
        return $this->post('wms/orderCancel', $params);
    }
}
