<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 定长字符串
 *
 * 长度为0-255，默认 1,存储时会向右边补足空格到指定长度
 * */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class MysqlChar implements RuleInterface
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
