<?php

namespace Abbotton\Jddj\Request\Promote;

use Abbotton\Jddj\Request\BaseRequest;

/**
 * 单品运费促销类常规接口.
 */
class FreightPromote extends BaseRequest
{
    /**
     * 创建单品运费活动-活动提交接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function createPromotion(array $params = [])
    {
        return $this->post('freightPromote/createPromotion', $params);
    }

    /**
     * 单品运费活动管理-活动详情接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryPromotionInfo(array $params = [])
    {
        return $this->get('freightPromote/queryPromotionInfo', $params);
    }

    /**
     * 单品运费活动管理-取消活动接口
     * ps: 京东官方文档拼写错误, `cancel` 拼写成了 `cancle`, 已反馈, 期待改进.
     *
     * @param array $params
     *
     * @return string
     */
    public function cancelPromotion(array $params = [])
    {
        return $this->post('freightPromote/canclePromotion', $params);
    }

    /**
     * 单品运费活动管理-多条件分页查询接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryPromotionInfoList(array $params = [])
    {
        return $this->get('freightPromote/queryPromotionInfoList', $params);
    }

    /**
     * 单品运费活动详情-分页查询商品接口.
     *
     * @param array $params
     *
     * @return string
     */
    public function queryPromotionSkuList(array $params = [])
    {
        return $this->get('freightPromote/queryPromotionSkuList', $params);
    }
}
