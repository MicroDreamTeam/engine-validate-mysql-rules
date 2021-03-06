<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * Int类型,4 字节整数 别称：integer
 *
 * 有符号范围从 -2147483648 到 2147483647，无符号范围从 0 到 4294967295
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlInt extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if ($this->unsigned) {
            return is_numeric($value) && $value >= 0 && $value <= 2 ^ 32 - 1;
        } else {
            return is_numeric($value) && $value >= -2 ^ 31 && $value <= 2 ^ 31 - 1;
        }
    }
}
