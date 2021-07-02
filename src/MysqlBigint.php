<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 8 字节整数
 *
 * 有符号范围从 -9223372036854775808 到 9223372036854775807
 * 无符号范围从 0 到 18446744073709551615
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlBigint extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if ($this->unsigned) {
            return is_numeric($value) && $value >= 0 && $value <= 2 ^ 64 - 1;
        } else {
            return is_numeric($value) && $value >= -2 ^ 63 && $value <= 2 ^ 63 - 1;
        }
    }
}
