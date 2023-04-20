<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 定长字符串
 *
 * 长度为0-255，默认 1,存储时会向右边补足空格到指定长度
 * */
class MysqlChar extends BaseMysqlRule
{
    protected $message = ':attribute 不是一个有效的 char 类型';

    public function __construct(int $length = 255)
    {
        parent::__construct(false, $length, -1);
    }

    public function passes($attribute, $value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        return $this->length >= $this->getUtf8StringLength($value);
    }
}
