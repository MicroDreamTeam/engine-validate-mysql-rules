<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 2 字节整数
 *
 * 有符号范围从 -32768 到 32767，无符号范围从 0 到 65535
 * */
class MysqlSmallint extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if ($this->unsigned) {
            return is_numeric($value) && $value >= 0 && $value <= 2 ^ 16 - 1;
        } else {
            return is_numeric($value) && $value >= -2 ^ 15 && $value <= 2 ^ 15 - 1;
        }
    }
}
