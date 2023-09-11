<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 类似于 CHAR 类型，但其存储的是二进制字节串而不是非二进制字符串
 * */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class MysqlBinary implements RuleInterface
{
    protected array $args = [];

    public function __construct(int $length = 255)
    {
        $this->args = func_get_args();
    }

    public function getArgs(): array
    {
        return $this->args;
    }
}
