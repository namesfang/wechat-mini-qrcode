<?php
// +-----------------------------------------------------------
// | 微信小程序二维码
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Namesfang\WeChat\Mini\QRCode\Bundle;

/**
 * 生成有数量限制的小程序二维码参数
 */
class WeChatQRCodeOption extends Option
{
    /**
     * 扫码进入的小程序页面路径，最大长度 128 字节，不能为空
     * 可携带参数
     * @param string $value
     */
    public function setPath($value)
    {
        $this->path = ltrim($value, '/');
    }
    
    /**
     * 自动配置线条颜色，如果颜色依然是黑色，则说明不建议配置主色调
     * @param boolean $value
     */
    public function setAutoColor($value=false)
    {
        $this->auto_color = $value;
    }
    
    /**
     * auto_color 为 false 时生效
     * @param number $red
     * @param number $green
     * @param number $blue
     */
    public function setLineColor($red=0, $green=0, $blue=0)
    {
        $this->line_color = [
            'r'=> $red,
            'g'=> $green,
            'b'=> $blue
        ];
    }
    
    /**
     * 是否需要透明底色
     * @param boolean $value
     */
    public function setIsHyaline($value=false)
    {
        $this->is_hyaline = $value;
    }
}