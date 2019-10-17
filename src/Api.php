<?php

namespace Qbhy\CL253;

use Hanson\Foundation\AbstractAPI;
use Psr\Http\Message\ResponseInterface;

abstract class Api extends AbstractAPI
{
    protected $app;

    public function __construct(CL253 $app)
    {
        $this->app = $app;
    }

    /**
     * @param ResponseInterface $response
     * @return array|null
     */
    public static function decodeResponse(ResponseInterface $response)
    {
        return @json_decode($response->getBody()->__toString(), true);
    }

}