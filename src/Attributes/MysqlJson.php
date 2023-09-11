<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Itwmw\Validate\Attributes\Rules\RuleInterface;

/**
 * 存储并可高效访问 JSON （JavaScript 对象） 文档中的数据
 * */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class MysqlJson implements RuleInterface
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
