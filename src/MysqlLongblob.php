<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 最多存储 4294967295 字节即 4GB 的 BLOB 字段，存储时在内容前使用 4 字节表示内容的字节数
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlLongblob extends MysqlBlob
{
    public function __construct(int $length = 2 ^ 32 - 1)
    {
        parent::__construct($length);
    }
}
