<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 8 字节整数
 *
 * 有符号范围从 -9223372036854775808 到 9223372036854775807
 * 无符号范围从 0 到 18446744073709551615
 * */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class MysqlBigint implements RuleInterface
{
    protected array $args = [];

    public function __construct(bool $unsigned = false)
    {
        $this->args = func_get_args();
    }

    public function getArgs(): array
    {
        return $this->args;
    }
}
