<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 类似于 VARCHAR 类型，但其存储的是二进制字节串而不是非二进制字符串
 * */
class MysqlVarbinary extends MysqlVarchar
{
    protected $message = ':attribute 不是一个有效的 varbinary 类型';

    public function passes($attribute, $value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        return $this->length >= strlen($value);
    }
}
