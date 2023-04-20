<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 最多存储 16777215字节的文本字段，存储时在内容前使用 3 字节表示内容的字节数
 * */
class MysqlMediumtext extends MysqlChar
{
    protected $message = ':attribute 不是一个有效的 mediumtext 类型';

    public function __construct(int $length = 2 ^ 24 -1)
    {
        parent::__construct($length);
    }
}
