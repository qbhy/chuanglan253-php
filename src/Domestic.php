<?php

namespace Qbhy\CL253;

class Domestic extends Api
{
    /**
     * @param        $mobile
     * @param        $msg
     * @param bool   $needStatus
     * @return array|null
     */
    public function sendSms($mobile, $msg, $needStatus = true)
    {
        return self::decodeResponse(
            $this->getHttp()->json($this->app->getConfig('host') . '/msg/send/json', [
                'account'  => $this->app->getConfig('account'),
                'password' => $this->app->getConfig('secret'),
                'msg'      => urlencode($msg),
                'phone'    => $mobile,
                'report'   => $needStatus,
            ])
        );
    }
}