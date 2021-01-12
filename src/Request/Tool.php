<?php

namespace Abbotton\Jddj\Request;

/**
 * 工具类常规接口
 *
 * @package Abbotton\Jddj\Request
 */
class Tool extends BaseRequest
{
    private $baseUrl = 'https://opentool.jddj.com/';
    
    /**
     * 文件上传接口
     *
     * @param array $params
     * @return string
     */
    public function fileUpload(array $params = [])
    {
        return $this->setRequestUrl($this->baseUrl)->post('toolapi/fileUpload', $params);
    }
    
    /**
     * 图片上传接口
     *
     * @param array $params
     * @return string
     */
    public function imageUpload(array $params = [])
    {
        return $this->setRequestUrl($this->baseUrl)->post('toolapi/imageUpload', $params);
    }

    /**
     * token更新确认接口
     *
     * @param array $params
     * @return string
     */
    public function verificationUpdateToken(array $params = [])
    {
        return $this->post('ApplicationService/verificationUpdateToken', $params);
    }
}