<?php

use Namesfang\WeChat\Mini\QRCode\Log\Logger;
use Namesfang\WeChat\Mini\QRCode\Bundle\QRCode;
use Namesfang\WeChat\Mini\QRCode\Bundle\WeChatQRCodeOption;

// +-----------------------------------------------------------
// | 生成有限制数量微信小程序二维码示例
// +-----------------------------------------------------------

define('ROOT_PATH', dirname(__DIR__));
define('LOG_PATH',  sprintf('%s/logs', ROOT_PATH));

spl_autoload_register(function ($className) {
    $className = str_replace('\\', '/', $className);
    $className = str_replace('Namesfang/WeChat/Mini/QRCode/', '', $className);
    require_once sprintf('%s/src/%s.php', ROOT_PATH, $className);
});
    
// +-----------------------------------------------------------
// | 日志记录
// | 自行封装需要实现 LoggerInterface 接口类
// +-----------------------------------------------------------
$logger = new Logger(LOG_PATH, true);

// 参数配置
$option = new WeChatQRCodeOption('k88NSXiADADIN');
$option->setPath('pages/my/index/index?id=23');
$option->setLineColor(33, 99, 240);

// 实例化
$qrcode = new QRCode($option, $logger);

$ret = $qrcode->create();

if($ret->error) {
    die($ret->error);
}

if('image/jpeg' == $ret->header['Content-Type']) {
    file_put_contents(LOG_PATH.'/b.jpg', $ret->original);
} else {
    die($ret->errmsg);
}



