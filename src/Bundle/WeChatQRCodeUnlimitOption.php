<?php
// +-----------------------------------------------------------
// | 微信小程序二维码
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Namesfang\WeChat\Mini\QRCode\Bundle;

/**
 * 生成暂无限制的小程序二维码参数
 */
class WeChatQRCodeUnlimitOption extends Option
{
    /**
     * 最大32个可见字符，只支持数字，大小写英文以及部分特殊字符
     * @param string $value
     */
    public function setScene($value)
    {
        $this->scene = $value;
    }
    
    /**
     * 必须是已经发布的小程序存在的页面
     * @param string $value
     */
    public function setPage($value)
    {
        $this->page = ltrim($value, '/');
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