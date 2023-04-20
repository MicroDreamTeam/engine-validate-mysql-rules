<?php

namespace Itwmw\Validate\Mysql\Rules;

use W7\Validate\Support\Rule\BaseRule;

/**
 * 可从最多 64 个成员中选择集合为一个值
 * */
class MysqlSet extends BaseRule
{
    protected $message = ':attribute 不是一个有效的 set 类型';

    protected array $value;

    public function __construct(...$value)
    {
        $this->value = $value;
    }

    public function passes($attribute, $value): bool
    {
        if (is_scalar($value)) {
            $value = explode(',', $value);
        }

        if (!is_array($value)) {
            return false;
        }

        return count(array_intersect($this->value, $value)) === count($value);
    }
}
