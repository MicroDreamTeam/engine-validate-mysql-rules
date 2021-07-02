<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 存储并可高效访问 JSON （JavaScript 对象） 文档中的数据
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlJson extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if (is_string($value)) {
            return !is_null(json_decode($value));
        }
        
        return is_array($value);
    }
}
