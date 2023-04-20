<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Attribute;
use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 最多存储 16777215字节的文本字段，存储时在内容前使用 3 字节表示内容的字节数
 * */
#[Attribute(Attribute::TARGET_PROPERTY)]
class MysqlMediumtext implements RuleInterface
{
    protected array $args = [];

    public function __construct(int $length = 2 ^ 24 -1)
    {
        $this->args = func_get_args();
    }

    public function getArgs(): array
    {
        return $this->args;
    }
}
