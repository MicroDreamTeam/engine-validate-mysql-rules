<?php

namespace Itwmw\Validate\Mysql\Rules;

use Itwmw\Table\Structure\Mysql\Column;
use Itwmw\Table\Structure\Mysql\Mysql;
use W7\Validate\Exception\ValidateException;
use W7\Validate\Support\Rule\BaseRule;

/**
 * 枚举，可从最多 65535 个值的列表中选择
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlEnum extends BaseRule
{
    /** @var false|Column  */
    protected $column;

    public function __construct(string $table, string $field)
    {
        $this->column = (new Mysql())->getDoctrineColumn($table, $field);
    }

    public function passes($attribute, $value): bool
    {
        if (!$this->column) {
            throw new ValidateException('Failed to get the field information of ' . $attribute);
        }

        return in_array($value, $this->column->options);
    }
}
