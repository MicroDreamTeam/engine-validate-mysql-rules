<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * Decimal类型,定点数（M，D），别称：numeric
 *
 * 整数部分（M）最大为 65（默认 10），小数部分（D）最大为 30（默认 0）
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlDecimal extends BaseMysqlRule
{
    public function __construct(bool $unsigned = false, int $length = 65, int $precision = -1)
    {
        parent::__construct($unsigned, $length, $precision);
    }

    public function passes($attribute, $value): bool
    {
        if (!is_numeric($value)) {
            return false;
        }

        if ($this->unsigned && $value < 0) {
            return false;
        }

        return $this->checkNumberLength($value);
    }
}
