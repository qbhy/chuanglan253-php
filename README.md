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

$acr = new CL253($config);
```


## 关于 - about
author: 96qbhy@gmail.com