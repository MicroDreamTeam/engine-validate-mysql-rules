<?php

namespace Itwmw\Validate\Mysql\Rules;

class MysqlTimestamp extends BaseMysqlRule
{
    public function passes($attribute, $value): bool
    {
        if (is_numeric($value)) {
            return $value > 0 && $value < 2146619647;
        }

        $unixTime = strtotime($value);

        if (false === $unixTime) {
            return false;
        }

        return $unixTime > 0 && $unixTime < 2146619647;
    }
}
