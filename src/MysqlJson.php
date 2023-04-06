<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 存储并可高效访问 JSON （JavaScript 对象） 文档中的数据
 * */
class MysqlJson extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if (is_string($value)) {
            json_decode($value);
            return JSON_ERROR_NONE === json_last_error();
        }

        return is_array($value);
    }
}
