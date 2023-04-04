<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 1 字节整数
 *
 * 有符号范围从 -128 到 127，无符号范围从 0 到 255
 * */
class MysqlTinyint extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if ($this->unsigned) {
            return is_numeric($value) && $value >= 0 && $value <= 255;
        } else {
            return is_numeric($value) && $value >= -128 && $value <= 127;
        }
    }
}
