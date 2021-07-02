<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 位类型（M）
 *
 * 每个值存储 M 位（默认为 1，最大为 64）
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlBit extends BaseMysqlRule
{
    public function __construct(int $length = 64)
    {
        parent::__construct(false, $length, -1);
    }

    public function passes($attribute, $value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        if (strlen($value) > $this->length) {
            return false;
        }

        return 1 === preg_match('/^[01]+$/', (string)$value);
    }
}
