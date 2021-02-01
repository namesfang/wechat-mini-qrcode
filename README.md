### 微信小程序二维码生成

##### 生成有限制数量二维码示例
```
// 需要的命名空间
use Namesfang\WeChat\Mini\QRCode\Log\Logger;
use Namesfang\WeChat\Mini\QRCode\Bundle\QRCode;
use Namesfang\WeChat\Mini\QRCode\Bundle\QRCodeOption;

// 示例需要，实际项目中无需要引入
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
$option = new QRCodeOption('k88NSXiADADIN');
$option->setPath('pages/my/index/index?id=23');
$option->setWidth(320);

// 实例化
$qrcode = new QRCode($option, $logger);

$ret = $qrcode->create();

if($ret->error) {
    die($ret->error);
}

if('image/jpeg' == $ret->header['Content-Type']) {
    file_put_contents(LOG_PATH.'/a.jpg', $ret->original);
} else {
    die($ret->errmsg);
}
```

##### 生成有限制数量微信小程序二维码示例
```
// 需要的命名空间
use Namesfang\WeChat\Mini\QRCode\Log\Logger;
use Namesfang\WeChat\Mini\QRCode\Bundle\QRCode;
use Namesfang\WeChat\Mini\QRCode\Bundle\WeChatQRCodeOption;

// 示例需要，实际项目中无需要引入
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
```

##### 生成暂无限制数量的小程序二维码示例
```
// 需要的命名空间
use Namesfang\WeChat\Mini\QRCode\Log\Logger;
use Namesfang\WeChat\Mini\QRCode\Bundle\QRCode;
use Namesfang\WeChat\Mini\QRCode\Bundle\WeChatQRCodeUnlimitOption;

// 示例需要，实际项目中无需要引入
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
$option = new WeChatQRCodeUnlimitOption('k88NSXiADADIN');
$option->setPage('pages/my/index/index');
$option->setScene('id=123748');
$option->setLineColor(33, 99, 240);

// 实例化
$qrcode = new QRCode($option, $logger);

$ret = $qrcode->create();

if($ret->error) {
    die($ret->error);
}

if('image/jpeg' == $ret->header['Content-Type']) {
    file_put_contents(LOG_PATH.'/unlimit.jpg', $ret->original);
} else {
    die($ret->errmsg);
}
```