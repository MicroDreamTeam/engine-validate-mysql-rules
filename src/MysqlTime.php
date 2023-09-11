<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 时间类型
 *
 * 范围从 -838:59:59 到 838:59:59
 * 格式：HH:MM:SS
 * */
class MysqlTime extends BaseMysqlRule
{
    protected $message = ':attribute 不是一个有效的 time 类型';

    public function passes($attribute, $value): bool
    {
        if (!is_scalar($value)) {
            return false;
        }

        if (str_contains($value, ':')) {
            $timeArray      = explode(':', $value);
            $timeArrayCount = count($timeArray);
            if ($timeArrayCount > 3) {
                return false;
            }

            if (3 === $timeArrayCount || 2 === $timeArrayCount) {
                if ($timeArray[0] < 0) {
                    $timeArray[0] = -$timeArray[0];
                }
                if ($timeArray[0] > 838) {
                    return false;
                }

                if ($timeArray[1] < 0 || $timeArray[1] > 59) {
                    return false;
                }

                if (3 === $timeArrayCount) {
                    if ($timeArray[2] < 0 || $timeArray[2] > 59) {
                        return false;
                    }
                }
                return true;
            } else {
                if ($timeArray[0] < 0) {
                    $value = -$timeArray[0];
                }
            }
        }

        return $value <= 8385959;
    }
}
