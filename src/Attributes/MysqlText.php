<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 最多存储 65535（2^16 - 1）字节的文本字段
 *
 * 存储时在内容前使用 2 字节表示内容的字节数
 * */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class MysqlText implements RuleInterface
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
