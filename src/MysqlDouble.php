<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 双精度浮点数
 *
 * 别名为：real，注：REAL_AS_FLOAT SQL 模式时它 real 是 FLOAT 的别名
 *
 * 取值范围从 -1.7976931348623157E+308 到 -2.2250738585072014E-308、0 以及从 2.2250738585072014E-308 到 1.7976931348623157E+308
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlDouble extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if ($this->unsigned) {
            return is_numeric($value) && (
                ($value >= 2.2250738585072014E-308 && $value <= 1.7976931348623157E+308)
                || 0 == $value
            ) && $this->checkNumberLength($value);
        } else {
            return is_numeric($value) && (
                ($value >= -1.7976931348623157E+308 && $value <= -2.2250738585072014E-308)
                || 0 == $value
                || ($value >= 2.2250738585072014E-308 && $value <= 1.7976931348623157E+308)
            )
                && $this->checkNumberLength($value);
        }
    }
}
