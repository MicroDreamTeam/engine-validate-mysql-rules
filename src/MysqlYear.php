<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 年份
 *
 * 四位数（4，默认）或两位数（2）的年份，取值范围从 70（1970）到 69（2069）或从 1901 到 2155 以及 0000
 * 格式 YYYY
 * */
class MysqlYear extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if (!is_numeric($value)) {
            return false;
        }
        $value = intval($value);

        if (2 === strlen($value)) {
            return $value >= 70 || $value <= 69;
        } elseif (4 === strlen($value)) {
            return $value >= 1901 && $value <= 2155;
        } elseif (0 === $value) {
            return true;
        }
        return false;
    }
}
