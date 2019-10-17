<?php

namespace Qbhy\CL253;

use Hanson\Foundation\Foundation;

/**
 * Class CL253
 *
 * @property-read Api $api
 *
 * @package Qbhy\CL253
 */
class CL253 extends Foundation
{
    protected $providers = [
        CL253ServiceProvider::class,
    ];
}