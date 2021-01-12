<?php

namespace Abbotton\Jddj\Request;

/**
 * 价格类常规接口.
 */
class Price extends BaseRequest
{
    /**
     * 修改门店商品会员价接口.
     *
     * @param array $params
     * @return string
     */
    public function updateStationPriceAndVipPrice(array $params = [])
    {
        return $this->post('vender/updateStationPriceAndVipPrice', $params);
    }

    /**
     * 根据到家商品编码和到家门店编码批量查询商品门店价格信息接口.
     *
     * @param array $params
     * @return string
     */
    public function getStationInfoList(array $params = [])
    {
        return $this->get('price/getStationInfoList', $params);
    }

    /**
     * 取消会员促销活动或活动下商品
     * ps: 京东官方文档中链接拼写有误, `cancel`拼写为`cancle`, 已反馈, 期待后续改正.
     *
     * @param array $params
     * @return string
     */
    public function cancelPromotionBtl(array $params = [])
    {
        return $this->post('promoteskuBtl/canclePromotionBtl', $params);
    }

    /**
     * 修改门店商品会员日价格接口.
     *
     * @param array $params
     * @return string
     * @deprecated
     */
    public function syncStagedPromotion(array $params = [])
    {
        return $this->post('price/syncStagedPromotion', $params);
    }

    /**
     * 根据商家商品编码和商家门店编码修改门店价格接口.
     *
     * @param array $params
     * @return string
     */
    public function updateStationPriceBySingle(array $params = [])
    {
        return $this->post('venderprice/updateStationPriceBySingle', $params);
    }

    /**
     * 根据到家商品编码和到家门店编码修改门店价格接口.
     *
     * @param array $params
     * @return string
     */
    public function updateStationPrice(array $params = [])
    {
        return $this->post('price/updateStationPrice', $params);
    }

    /**
     * 根据商家商品编码和商家门店编码批量修改门店价格接口.
     *
     * @param array $params
     * @return string
     */
    public function batchUpdateStationPrice(array $params = [])
    {
        return $this->post('venderprice/updateStationPrice', $params);
    }

    /**
     * 删除门店商品会员价接口.
     *
     * @param array $params
     * @return string
     */
    public function delVipPrice(array $params = [])
    {
        return $this->post('vender/delVipPrice', $params);
    }

    /**
     * 创建会员促销
     *
     * @param array $params
     * @return string
     */
    public function savePromotionBtl(array $params = [])
    {
        return $this->post('promoteskuBtl/savePromotionBtl', $params);
    }
}
