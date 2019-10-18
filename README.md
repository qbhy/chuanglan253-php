# 创蓝253
创蓝253 php sdk,支持laravel/lumen

## 安装 - install
* composer 安装
```bash
$ composer require 96qbhy/cl253
```

## 使用 - usage
```php
<?php
use Qbhy\CL253\CL253;

require 'vendor/autoload.php';

$config = [
    'debug'=>true,
    'account' => 'account',
    'secret' => 'secret',
];

$sms = new CL253($config);

var_dump($sms->domestic->sendSms('176xxxx3329', '测试短信'));

```


## 关于 - about
author: 96qbhy@gmail.com