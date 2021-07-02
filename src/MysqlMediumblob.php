<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 最多存储 16777215字节的 BLOB 字段，存储时在内容前使用 3 字节表示内容的字节数
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlMediumblob extends MysqlBlob
{
    public function __construct(int $length = 2 ^ 24 - 1)
    {
        parent::__construct($length);
    }
}
