<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 最多存储 255字节的 BLOB 字段，存储时在内容前使用 1 字节表示内容的字节数
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlTinyblob extends MysqlBlob
{
    public function __construct(int $length = 2 ^ 8 - 1)
    {
        parent::__construct($length);
    }
}
