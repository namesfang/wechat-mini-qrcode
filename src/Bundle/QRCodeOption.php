<?php
// +-----------------------------------------------------------
// | 微信小程序二维码
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Namesfang\WeChat\Mini\QRCode\Bundle;

/**
 * 生成有数量限制的二维码参数
 */
class QRCodeOption extends Option
{
    /**
     * 扫码进入的小程序页面路径允许带参
     * @param string $value
     */
    public function setPath($value)
    {
        $this->path = ltrim($value, '/');
    }
}