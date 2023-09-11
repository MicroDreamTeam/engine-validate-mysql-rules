<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 可从最多 64 个成员中选择集合为一个值
 * */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class MysqlSet implements RuleInterface
{
    protected array $args = [];

    public function __construct(...$value)
    {
        $this->args = func_get_args();
    }

    public function getArgs(): array
    {
        return $this->args;
    }
}
