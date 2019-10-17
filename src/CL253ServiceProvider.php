<?php

namespace Qbhy\CL253;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class CL253ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['domestic'] = function (CL253 $app) {
            return new Domestic($app);
        };
    }
}