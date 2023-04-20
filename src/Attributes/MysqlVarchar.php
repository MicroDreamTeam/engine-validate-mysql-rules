<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Attribute;
use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 变长字符串
 *
 * 长度为0-65535，最大有效长度取决于最大行大小
 * */
#[Attribute(Attribute::TARGET_PROPERTY)]
class MysqlVarchar implements RuleInterface
{
    protected array $args = [];

    public function __construct(int $length = 2 ** 16 - 1)
    {
        $this->args = func_get_args();
    }

    public function getArgs(): array
    {
        return $this->args;
    }
}
