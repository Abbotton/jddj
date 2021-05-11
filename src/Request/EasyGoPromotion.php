<?php

namespace Abbotton\Jddj\Request;

/**
 * 轻松购常规接口.
 */
class EasyGoPromotion extends BaseRequest
{
    /**
     * 【商品类】轻松购商品更新接口.
     *
     * @param array $params
     * @return string
     */
    public function updateSku(array $params = [])
    {
        return $this->post('easyGoPromotion/updateSku', $params);
    }

    /**
     * 【商品类】添加商家商品积分规则接口.
     *
     * @param array $params
     * @return string
     */
    public function setGoodsIntegral(array $params = [])
    {
        return $this->post('easyGoPromotion/setGoodsIntegral', $params);
    }

    /**
     * 【商品类】轻松购商品查询接口.
     *
     * @param array $params
     * @return string
     */
    public function querySku(array $params = [])
    {
        return $this->get('easyGoPromotion/querySku', $params);
    }

    /**
     * 【商品类】轻松购批量商品同步接口.
     *
     * @param array $params
     * @return string
     */
    public function createSku(array $params = [])
    {
        return $this->post('easyGoPromotion/createSku', $params);
    }

    /**
     * 【商品类】轻松购商品批量新增或更新接口.
     *
     * @param array $params
     * @return string
     */
    public function batchSaveOrUpdate(array $params = [])
    {
        return $this->post('easyGoPromotion/batchSaveOrUpdate', $params);
    }

    /**
     * 【价格类】轻松购商品价格批量修改接口.
     *
     * @param array $params
     * @return string
     */
    public function batchUpdateSkuPrice(array $params = [])
    {
        return $this->post('easyGoPromotion/batchUpdateSkuPrice', $params);
    }

    /**
     * 【商品类】轻松购电子秤PLU配置维护接口.
     *
     * @param array $params
     * @return string
     */
    public function syncElectronicScalePlu(array $params = [])
    {
        return $this->post('easyGoPromotion/syncElectronicScalePlu', $params);
    }

    /**
     * 【促销类】新版轻松购分期促销接口.
     *
     * @param array $params
     * @return string
     */
    public function syncPromotionSingleDiscountMoney4Open(array $params = [])
    {
        return $this->post('easyGoPromotion/syncPromotionSingleDiscountMoney4Open', $params);
    }

    /**
     * 【商品类】轻松购单个商品同步接口.
     *
     * @param array $params
     * @return string
     */
    public function addSku(array $params = [])
    {
        return $this->post('easyGoPromotion/addSku', $params);
    }

    /**
     * 【商品类】轻松购电子秤PLU配置批量维护接口.
     *
     * @param array $params
     * @return string
     */
    public function batchSyncElectronicScalePlu(array $params = [])
    {
        return $this->post('easyGoPromotion/batchSyncElectronicScalePlu', $params);
    }

    /**
     * 【商品类】轻松购商品新增或更新接口.
     *
     * @param array $params
     * @return string
     */
    public function saveOrUpdate(array $params = [])
    {
        return $this->post('easyGoPromotion/saveOrUpdate', $params);
    }

    /**
     * 【价格类】轻松购商品价格修改接口.
     *
     * @param array $params
     * @return string
     */
    public function updateSkuPrice(array $params = [])
    {
        return $this->post('easyGoPromotion/updateSkuPrice', $params);
    }

    /**
     * 【促销类】轻松购单品数量折扣同步接口.
     *
     * @param array $params
     * @return string
     */
    public function syncPromotionSingleDiscountPercent(array $params = [])
    {
        return $this->post('easyGoPromotion/syncPromotionSingleDiscountPercent', $params);
    }

    /**
     * 【促销类】轻松购单品时段（折扣）促销接口.
     *
     * @param array $params
     * @return string
     */
    public function syncPromotionSinglePeriodDiscount(array $params = [])
    {
        return $this->post('easyGoPromotion/syncPromotionSinglePeriodDiscount', $params);
    }

    /**
     * 【促销类】轻松购单品品牌分类折扣促销接口.
     *
     * @param array $params
     * @return string
     */
    public function syncPromotionSingleBrandCategoryDiscount(array $params = [])
    {
        return $this->post('easyGoPromotion/syncPromotionSingleBrandCategoryDiscount', $params);
    }

    /**
     * 【促销类】轻松购单品折扣第N件X元或者X折扣接口.
     *
     * @param array $params
     * @return string
     */
    public function syncPromotionSingleNDiscount(array $params = [])
    {
        return $this->post('easyGoPromotion/syncPromotionSingleNDiscount', $params);
    }

    /**
     * 【促销类】轻松购满减促销接口.
     *
     * @param array $params
     * @return string
     */
    public function syncPromotionFullDiscount(array $params = [])
    {
        return $this->post('easyGoPromotion/syncPromotionFullDiscount', $params);
    }

    /**
     * 【促销类】轻松购组合促销接口.
     *
     * @param array $params
     * @return string
     */
    public function syncPromotionCombinationDiscountMoney(array $params = [])
    {
        return $this->post('easyGoPromotion/syncPromotionCombinationDiscountMoney', $params);
    }

    /**
     * 【促销类】轻松购设置商品促销类型接口.
     *
     * @param array $params
     * @return string
     */
    public function syncSkuPromotionType(array $params = [])
    {
        return $this->post('easyGoPromotion/syncSkuPromotionType', $params);
    }

    /**
     * 【促销类】轻松购查询商品促销表中目前生效的促销信息.
     *
     * @param array $params
     * @return string
     */
    public function querySkuPromotionType(array $params = [])
    {
        return $this->get('easyGoPromotion/querySkuPromotionType', $params);
    }

    /**
     * 【促销类】轻松购单品折扣促销同步接口.
     *
     * @param array $params
     * @return string
     */
    public function syncPromotionSingleQuantitySales(array $params = [])
    {
        return $this->post('easyGoPromotion/syncPromotionSingleQuantitySales', $params);
    }

    /**
     * 【促销类】轻松购规则促销接口.
     *
     * @param array $params
     * @return string
     */
    public function syncRulePromotion(array $params = [])
    {
        return $this->post('easyGoPromotion/syncRulePromotion', $params);
    }

    /**
     * 【促销类】轻松购满减促销查询接口.
     *
     * @param array $params
     * @return string
     */
    public function queryFullDiscount(array $params = [])
    {
        return $this->get('easyGoPromotion/queryFullDiscount', $params);
    }

    /**
     * 【促销类】轻松购商品数量折扣促销查询接口.
     *
     * @param array $params
     * @return string
     */
    public function querySingleDiscountPercent(array $params = [])
    {
        return $this->get('easyGoPromotion/querySingleDiscountPercent', $params);
    }

    /**
     * 【促销类】轻松购分期促销查询接口.
     *
     * @param array $params
     * @return string
     */
    public function queryPromotionSingleDiscountMoney(array $params = [])
    {
        return $this->get('easyGoPromotion/queryPromotionSingleDiscountMoney', $params);
    }

    /**
     * 【促销类】轻松购单品时段（折扣）促销查询接口.
     *
     * @param array $params
     * @return string
     */
    public function querySinglePeriodDiscount(array $params = [])
    {
        return $this->get('easyGoPromotion/querySinglePeriodDiscount', $params);
    }

    /**
     * 【促销类】轻松购组合促销查询接口.
     *
     * @param array $params
     * @return string
     */
    public function queryCombinationDiscountMoney(array $params = [])
    {
        return $this->get('easyGoPromotion/queryCombinationDiscountMoney', $params);
    }
}
