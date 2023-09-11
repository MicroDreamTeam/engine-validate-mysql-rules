<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 时间类型
 *
 * 范围从 -838:59:59 到 838:59:59
 * 格式：HH:MM:SS
 * */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class MysqlTime implements RuleInterface
{
    protected array $args = [];

    public function __construct()
    {
        $this->args = func_get_args();
    }

    public function getArgs(): array
    {
        return $this->args;
    }
}
