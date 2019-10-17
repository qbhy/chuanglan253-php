<?php

namespace Qbhy\CL253;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class CL253ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['api'] = function (CL253 $app) {
            return new Api($app);
        };
    }
}