<?php
// +-----------------------------------------------------------
// | 微信小程序二维码
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Namesfang\WeChat\Mini\QRCode\Bundle;

/**
 * 公共请求参数
 */
class Option
{
    /**
     * 所有接口参数
     * @var array
     */
    protected $option = [];
    
    /**
     * 接口调用凭证
     * @var string $value
     */
    protected $accessToken;
    
    /**
     * 必须在此设置 ACCESS TOKEN
     * @param string $access_key_secret
     */
    public function __construct($access_token)
    {
        $this->accessToken = $access_token;
    }
    
    /**
     * 设置接口参数
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        $this->option[ $name ] = $value;
    }
    
    /**
     * 获得接口参数
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        if(isset($this->option[ $name ])) {
            return $this->option[ $name ];
        }
    }
    
    /**
     * 获得所有参数
     * @return string
     */
    public function getAll()
    {
        return $this->option;
    }
    
    /**
     * 获得调用凭证
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }
    
    /**
     * 二维码的宽度
     * @param number $value
     */
    public function setWidth($value=430)
    {
        $this->width = min(1280, max(280, $value));
    }
}