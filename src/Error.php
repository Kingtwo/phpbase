<?php
/**
 * Created by PhpStorm.
 * User: cnbattle
 * Date: 17-11-18
 * Time: 下午4:24
 */

namespace PHPBase;

class Error
{
    public static function output($message)
    {
        die($message);
    }

    /**
     * @param int $status
     * @param string $msg
     * @return array
     */
    public static function error($status = 200, $msg = '') {
        return [
            'status' => $status,
            'msg' => $msg
        ];
    }
}