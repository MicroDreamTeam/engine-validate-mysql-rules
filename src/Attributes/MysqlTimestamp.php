<?php

namespace Itwmw\Validate\Mysql\Rules\Attributes;

use Attribute;
use Itwmw\Validate\Attributes\Rules\RuleInterface;


#[Attribute(Attribute::TARGET_PROPERTY)]
class MysqlTimestamp implements RuleInterface
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
