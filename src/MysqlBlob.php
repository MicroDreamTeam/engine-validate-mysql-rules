<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 最多存储 65535字节的 BLOB 字段，存储时在内容前使用 2 字节表示内容的字节数
 * */

class MysqlBlob extends BaseMysqlRule
{
    public function __construct(int $length = 2 ^ 16 - 1)
    {
        parent::__construct(false, $length, -1);
    }

    public function passes($attribute, $value): bool
    {
        return is_scalar($value) && strlen($value) <= $this->length;
    }
}
