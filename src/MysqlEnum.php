<?php

namespace Itwmw\Validate\Mysql\Rules;

use W7\Validate\Support\Rule\BaseRule;

/**
 * 枚举，可从最多 65535 个值的列表中选择
 * */
class MysqlEnum extends BaseRule
{
    public function __construct(protected array $value = [])
    {

    }

    public function passes($attribute, $value): bool
    {
        return in_array($value, $this->value);
    }
}
