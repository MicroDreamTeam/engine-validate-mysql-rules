<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 日期类型
 *
 * 支持的范围从 1000-01-01 到 9999-12-31
 * 格式为：YYYY-MM-DD
 * */
class MysqlDate extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        $unixTime = strtotime($value);
        if (false === $unixTime) {
            return false;
        }
        return $unixTime >= -30610253143 && $unixTime <= 253402185600 && date('Y-m-d', $unixTime) == $value;
    }
}
