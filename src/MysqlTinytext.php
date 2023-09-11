<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 最多存储 255 字节的文本字段，存储时在内容前使用 1 字节表示内容的字节数
 * */
class MysqlTinytext extends MysqlChar
{
    protected $message = ':attribute 不是一个有效的 tinytext 类型';

    public function __construct(int $length = 2 ** 8 - 1)
    {
        parent::__construct($length);
    }
}
