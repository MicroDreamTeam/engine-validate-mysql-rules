<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Attribute;
use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 日期类型
 *
 * 支持的范围从 1000-01-01 到 9999-12-31
 * 格式为：YYYY-MM-DD
 * */
#[Attribute(Attribute::TARGET_PROPERTY)]
class MysqlDate implements RuleInterface
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
