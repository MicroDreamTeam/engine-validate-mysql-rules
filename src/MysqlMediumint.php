<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 3 字节整数
 *
 * 有符号范围从 -8388608 到 8388607，无符号范围从 0 到 16777215
 * */
class MysqlMediumint extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if ($this->unsigned) {
            return is_numeric($value) && $value >= 0 && $value <= 16777215;
        } else {
            return is_numeric($value) && $value >= -8388608 && $value <= 8388607;
        }
    }
}
