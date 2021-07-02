<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 类似于 VARCHAR 类型，但其存储的是二进制字节串而不是非二进制字符串
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlVarbinary extends MysqlVarchar
{
    public function passes($attribute, $value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        return $this->length >= strlen($value);
    }
}
