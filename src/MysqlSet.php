<?php

namespace Itwmw\Validate\Mysql\Rules;

use Itwmw\Table\Structure\Mysql\Column;
use Itwmw\Table\Structure\Mysql\Mysql;
use W7\Validate\Exception\ValidateException;
use W7\Validate\Support\Rule\BaseRule;

/**
 * 可从最多 64 个成员中选择集合为一个值
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlSet extends BaseRule
{
    protected Column|false $column;

    public function __construct(string $table, string $field)
    {
        $this->column = (new Mysql())->getDoctrineColumn($table, $field);
    }

    public function passes($attribute, $value): bool
    {
        if (!$this->column) {
            throw new ValidateException('Failed to get the field information of ' . $attribute);
        }

        if (is_scalar($value)) {
            $value = explode(',', $value);
        }

        if (!is_array($value)) {
            return false;
        }

        return count(array_intersect($this->column->options, $value)) === count($value);
    }
}
