<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Attribute;
use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 最多存储 4294967295 字节的文本字段，存储时在内容前使用 4 字节表示内容的字节数
 * */
#[Attribute(Attribute::TARGET_PROPERTY)]
class MysqlLongtext implements RuleInterface
{
    protected array $args = [];

    public function __construct(int $length = 2 ^ 32 - 1)
    {
        $this->args = func_get_args();
    }

    public function getArgs(): array
    {
        return $this->args;
    }
}