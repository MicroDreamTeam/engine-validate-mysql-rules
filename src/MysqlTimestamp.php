<?php

namespace Itwmw\Validate\Mysql\Rules;

class MysqlTimestamp extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        $unixTime = strtotime($value);

        if (false === $unixTime) {
            return false;
        }

        return $unixTime > 0 && $unixTime < 2146619647;
    }
}
