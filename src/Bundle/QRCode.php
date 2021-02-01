<?php
// +-----------------------------------------------------------
// | 微信小程序二维码
// +-----------------------------------------------------------
// | 人个主页 http://cli.life
// | 堪笑作品 jixiang_f@163.com
// +-----------------------------------------------------------
namespace Namesfang\WeChat\Mini\QRCode\Bundle;

use Namesfang\WeChat\Mini\QRCode\Bundle;
use Namesfang\WeChat\Mini\QRCode\Request;

/**
 * 生成有数量限制的二维码
 */
class QRCode extends Bundle
{
    /**
     * 获取小程序二维码
     * @return \Namesfang\WeChat\Mini\QRCode\Response
     */
    public function create()
    {
        $data = $this->option->getAll();
        
        // 根据参数不同执行不同的接口
        $pieces = explode('\\', get_class($this->option));
        switch (array_pop($pieces)) {
            case 'WeChatQRCodeOption':
                $path = 'wxa/getwxacode';
                break;
            case 'WeChatQRCodeUnlimitOption':
                $path = 'wxa/getwxacodeunlimit';
                break;
            default:
                $path = 'cgi-bin/wxaapp/createwxaqrcode';
                break;
        }
        
        $request = new Request($this->logger);
        
        $request->url(self::BASE_URL);
        $request->path($path);
        $request->data($data);
        $request->query([
            'access_token'=> $this->option->getAccessToken()
        ]);
        return $request->post();
    }
}