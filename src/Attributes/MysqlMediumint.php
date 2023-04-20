<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Attribute;
use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 3 字节整数
 *
 * 有符号范围从 -8388608 到 8388607，无符号范围从 0 到 16777215
 * */
#[Attribute(Attribute::TARGET_PROPERTY)]
class MysqlMediumint implements RuleInterface
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
