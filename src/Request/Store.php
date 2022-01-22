<?php

namespace Abbotton\Jddj\Request;

/**
 * 门店类常规接口.
 */
class Store extends BaseRequest
{
    /**
     * 根据城市编码查询区域信息列表接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getNextLevelByType(array $params = [])
    {
        return $this->get('address/getNextLevelByType', $params);
    }

    /**
     * 查询商家中心账号信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function searchUser(array $params = [])
    {
        return $this->get('privilege/searchUser', $params);
    }

    /**
     * 商家门店评价信息回复接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function orgReplyComment(array $params = [])
    {
        return $this->post('commentOutApi/orgReplyComment', $params);
    }

    /**
     * 获取商家服务城市列表.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryVenderServiceArea(array $params = [])
    {
        return $this->get('venderApiService/queryVenderServiceArea', $params);
    }

    /**
     * 获取到家所有城市信息列表接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function allcities(array $params = [])
    {
        return $this->get('address/allcities', $params);
    }

    /**
     * 根据门店编码修改运费起送价、满免以及商家自送运费接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateStoreFreightConfig(array $params = [])
    {
        return $this->post('freight/updateStoreFreightConfig', $params);
    }

    /**
     * 修改门店基础信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateStoreInfo4Open(array $params = [])
    {
        return $this->post('store/updateStoreInfo4Open', $params);
    }

    /**
     * 获取到家门店编码列表接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getStationsByVenderId(array $params = [])
    {
        return $this->get('store/getStationsByVenderId', $params);
    }

    /**
     * 修改门店运费起送价及满免接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateStoreFreightConfigNew(array $params = [])
    {
        return $this->post('freight/updateStoreFreightConfigNew', $params);
    }

    /**
     * 根据到家门店编码修改商家自动接单接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateStoreConfig4Open(array $params = [])
    {
        return $this->post('store/updateStoreConfig4Open', $params);
    }

    /**
     * 根据订单号查询商家门店评价信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getCommentByOrderId(array $params = [])
    {
        return $this->get('commentOutApi/getCommentByOrderId', $params);
    }

    /**
     * 获取门店配送范围接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getDeliveryRangeByStationNo(array $params = [])
    {
        return $this->get('store/getDeliveryRangeByStationNo', $params);
    }

    /**
     * 新增不带资质的门店信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createStore(array $params = [])
    {
        return $this->post('store/createStore', $params);
    }

    /**
     * 修改商家中心账号状态接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateUser(array $params = [])
    {
        return $this->post('privilege/updateUser', $params);
    }

    /**
     * 根据到家门店编码查询门店基本信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getStoreInfoByStationNo(array $params = [])
    {
        return $this->get('storeapi/getStoreInfoByStationNo', $params);
    }

    /**
     * 商家会员制卡成功接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createCardInfo(array $params = [])
    {
        return $this->post('member/createCardInfo', $params);
    }

    /**
     * 初始化商家会员信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function initMerchantMemberInfo(array $params = [])
    {
        return $this->post('member/initMerchantMemberInfo', $params);
    }

    /**
     * 查询到家注册的商家会员注册信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function getCommonMemberRegisteredInfo(array $params = [])
    {
        return $this->get('member/getCommonMemberRegisteredInfo', $params);
    }

    /**
     * 异步积分换券回调.
     *
     * @param array $params
     *
     * @return string
     */
    public function exchangeCallback(array $params = [])
    {
        return $this->post('vipPoints/exchangeCallback', $params);
    }

    /**
     * 商家会员续费成功接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function renewCardInfo(array $params = [])
    {
        return $this->post('member/renewCardInfo', $params);
    }

    /**
     * 批量同步商家会员信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function synchronousMerchantMemberInfo(array $params = [])
    {
        return $this->post('member/synchronousMerchantMemberInfo', $params);
    }

    /**
     * 更新商家会员信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateMerchantMemberInfo(array $params = [])
    {
        return $this->post('member/updateMerchantMemberInfo', $params);
    }

    /**
     * 更新已绑定到家的商家会员卡信息接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function updateCardInfo(array $params = [])
    {
        return $this->post('member/updateCardInfo', $params);
    }

    /**
     * 提交资质接口接口未更新.
     *
     * @param array $params
     *
     * @return string
     */
    public function submitStoreQualifyList(array $params = [])
    {
        return $this->post('store/submitStoreQualifyList', $params);
    }

    /**
     * 查询门店资质审核状态接口接口未更新.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryQualifyApproveState(array $params = [])
    {
        return $this->post('store/queryQualifyApproveState', $params);
    }
}
