<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 日期时间类型
 *
 * 支持的范围从 1000-01-01 00:00:00 到 9999-12-31 23:59:59
 * 格式为：YYYY-MM-DD HH:MM:SS
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlDatetime extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        $unixTime = strtotime($value);
        if (false === $unixTime) {
            return false;
        }
        return $unixTime >= -30610253143 && $unixTime <= 253402271999 && date('Y-m-d H:i:s', $unixTime) == $value;
    }
}
