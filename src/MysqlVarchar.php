<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 变长字符串
 *
 * 长度为0-65535，最大有效长度取决于最大行大小
 * */
class MysqlVarchar extends MysqlChar
{
    protected $message = ':attribute 不是一个有效的 varchar 类型';

    public function __construct(int $length = 2 ^ 16 - 1)
    {
        parent::__construct($length);
    }
}
