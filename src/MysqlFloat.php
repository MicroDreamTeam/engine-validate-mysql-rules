<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 单精度浮点数
 *
 * 取值范围从 -3.402823466E+38 到 -1.175494351E-38、0 以及从 1.175494351E-38 到 3.402823466E+38
 * */
class MysqlFloat extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if ($this->unsigned) {
            return is_numeric($value) && (
                ($value >= 1.175494351E-38 && $value <= 3.402823466E+38)
                || 0 == $value
            ) && $this->checkNumberLength($value);
        } else {
            return is_numeric($value) && (
                ($value >= -3.402823466E+38 && $value <= 1.175494351E-38)
                || 0 == $value
                || ($value >= 1.175494351E-38 && $value <= 3.402823466E+38)
            ) && $this->checkNumberLength($value);
        }
    }
}
