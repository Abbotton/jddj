<?php

namespace Abbotton\Jddj\Request;

/**
 * 商品类常规接口.
 */
class Pms extends BaseRequest
{
    /**
     * 查询商家已上传商品信息列表接口.
     *
     * @param array $params
     * @return string
     */
    public function querySkuInfos(array $params = [])
    {
        return $this->get('pms/querySkuInfos', $params);
    }

    /**
     * 查询商品图片处理结果接口.
     *
     * @param array $params
     * @return string
     */
    public function queryListBySkuIds(array $params = [])
    {
        return $this->get('order/queryListBySkuIds', $params);
    }

    /**
     * 新版新增商品信息接口.
     *
     * @param array $params
     * @return string
     */
    public function addSku(array $params = [])
    {
        return $this->post('pms/addSku', $params);
    }

    /**
     * 新版根据商品UPC码批量新增商品接口.
     *
     * @param array $params
     * @return string
     */
    public function batchAddSku(array $params = [])
    {
        return $this->post('pms/batchAddSku', $params);
    }

    /**
     * 根据到家商品编码批量更新商家商品编码接口.
     *
     * @param array $params
     * @return string
     */
    public function batchUpdateOutSkuId(array $params = [])
    {
        return $this->post('pms/sku/batchUpdateOutSkuId', $params);
    }

    /**
     * 新版根据商家商品编码修改商品信息接口.
     *
     * @param array $params
     * @return string
     */
    public function updateSku(array $params = [])
    {
        return $this->post('pms/updateSku', $params);
    }

    /**
     * 新版查询商品创建状态接口.
     *
     * @param array $params
     * @return string
     */
    public function getSkuStatus(array $params = [])
    {
        return $this->get('pms/getSkuStatus', $params);
    }

    /**
     * 查询商家店内分类信息接口.
     *
     * @param array $params
     * @return string
     */
    public function queryCategoriesByOrgCode(array $params = [])
    {
        return $this->get('pms/queryCategoriesByOrgCode', $params);
    }

    /**
     * 分页查询商品品牌信息接口.
     *
     * @param array $params
     * @return string
     */
    public function queryPageBrandInfo(array $params = [])
    {
        return $this->get('pms/queryPageBrandInfo', $params);
    }

    /**
     * 获取京东到家类目信息接口.
     *
     * @param array $params
     * @return string
     */
    public function queryChildCategoriesForOP(array $params = [])
    {
        return $this->get('api/queryChildCategoriesForOP', $params);
    }

    /**
     * 新增商家店内分类信息接口.
     *
     * @param array $params
     * @return string
     */
    public function addShopCategory(array $params = [])
    {
        return $this->get('pms/addShopCategory', $params);
    }

    /**
     * 修改商家店内分类信息接口.
     *
     * @param array $params
     * @return string
     */
    public function updateShopCategory(array $params = [])
    {
        return $this->get('pms/updateShopCategory', $params);
    }

    /**
     * 删除商家店内分类接口.
     *
     * @param array $params
     * @return string
     */
    public function delShopCategory(array $params = [])
    {
        return $this->get('pms/delShopCategory', $params);
    }

    /**
     * 修改商家店内分类顺序接口.
     *
     * @param array $params
     * @return string
     */
    public function changeShopCategoryOrder(array $params = [])
    {
        return $this->post('pms/changeShopCategoryOrder', $params);
    }

    /**
     * 分页查询京东到家商品前缀库接口.
     *
     * @param array $params
     * @return string
     */
    public function queryKeyWordDicInfo(array $params = [])
    {
        return $this->get('pms/queryKeyWordDicInfo', $params);
    }

    /**
     * 商家商品状态同步接口.
     *
     * @param array $params
     * @return string
     */
    public function syncProduct(array $params = [])
    {
        return $this->get('search/syncProduct', $params);
    }

    /**
     * 商家商品状态检查接口.
     *
     * @param array $params
     * @return string
     */
    public function getProductStatus(array $params = [])
    {
        return $this->get('search/getProductStatus', $params);
    }

    /**
     * 新增SPU信息接口.
     *
     * @param array $params
     * @return string
     */
    public function addSpu(array $params = [])
    {
        return $this->post('pms/addSpu', $params);
    }

    /**
     * 追加新的SKU到指定的SPU接口.
     *
     * @param array $params
     * @return string
     */
    public function appendSku(array $params = [])
    {
        return $this->post('pms/appendSku', $params);
    }

    /**
     * 更新SPU基础信息接口.
     *
     * @param array $params
     * @return string
     */
    public function updateSpu(array $params = [])
    {
        return $this->post('pms/updateSpu', $params);
    }

    /**
     * 更新SPU下指定SKU的基础信息接口.
     *
     * @param array $params
     * @return string
     */
    public function updateSkuBaseInfo(array $params = [])
    {
        return $this->post('pms/updateSkuBaseInfo', $params);
    }

    /**
     * 更新SPU销售属性信息接口.
     *
     * @param array $params
     * @return string
     */
    public function updateSpuSaleAttr(array $params = [])
    {
        return $this->post('pms/updateSpuSaleAttr', $params);
    }

    /**
     * 追加新的SPU销售属性信息接口.
     *
     * @param array $params
     * @return string
     */
    public function appendSpuSaleAttr(array $params = [])
    {
        return $this->post('pms/appendSpuSaleAttr', $params);
    }

    /**
     * 查询SPU下所有的销售属性信息接口.
     *
     * @param array $params
     * @return string
     */
    public function getSpuSaleAttr(array $params = [])
    {
        return $this->get('pms/getSpuSaleAttr', $params);
    }

    /**
     * 查询SPU创建状态接口.
     *
     * @param array $params
     * @return string
     */
    public function getSpuStatus(array $params = [])
    {
        return $this->get('pms/getSpuStatus', $params);
    }

    /**
     * 批量商家SPU编码接口.
     *
     * @param array $params
     * @return string
     */
    public function batchUpdateOutSuperId(array $params = [])
    {
        return $this->get('pms/batchUpdateOutSuperId', $params);
    }

    /**
     * 查询类目属性字典信息接口.
     *
     * @param array $params
     * @return string
     */
    public function getAllSkuCategoryAttr(array $params = [])
    {
        return $this->get('pms/getAllSkuCategoryAttr', $params);
    }

    /**
     * 根据三级类目ID查询类目属性字典信息接口.
     *
     * @param array $params
     * @return string
     */
    public function getSkuCategoryAttrByCategoryId(array $params = [])
    {
        return $this->get('pms/getSkuCategoryAttrByCategoryId', $params);
    }

    /**
     * 新增商品类目属性值信息接口.
     *
     * @param array $params
     * @return string
     */
    public function addSkuCateAttrValue(array $params = [])
    {
        return $this->post('pms/addSkuCateAttrValue', $params);
    }

    /**
     * 更新商品类目属性值信息接口.
     *
     * @param array $params
     * @return string
     */
    public function updateSkuCateAttrValue(array $params = [])
    {
        return $this->post('pms/updateSkuCateAttrValue', $params);
    }

    /**
     * 删除商品类目属性值信息接口.
     *
     * @param array $params
     * @return string
     */
    public function deleteSkuCateAttrValue(array $params = [])
    {
        return $this->post('pms/deleteSkuCateAttrValue', $params);
    }

    /**
     * 根据商品查询类目属性值信息接口.
     *
     * @param array $params
     * @return string
     */
    public function getSkuCateAttrValuesBySkuId(array $params = [])
    {
        return $this->get('pms/getSkuCateAttrValuesBySkuId', $params);
    }

    /**
     * 根据平台类目id查询类目销售属性.
     *
     * @param array $params
     * @return mixed
     */
    public function queryPmsCategorySaleAttr(array $params = [])
    {
        return $this->get('OpenPmsCategorySaleAttrService/queryPmsCategorySaleAttr', $params);
    }
}
