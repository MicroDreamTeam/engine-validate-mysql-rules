<?php

namespace Itwmw\Validate\Mysql\Rules;

use W7\Validate\Support\Rule\BaseRule;

abstract class BaseMysqlRule extends BaseRule
{
    /** @var bool  */
    protected bool $unsigned = false;

    /** @var int  */
    protected int $length = -1;

    /** @var int  */
    protected int $precision = -1;

    public function __construct(bool $unsigned = false, int $length = -1, int $precision = -1)
    {
        $this->unsigned  = $unsigned;
        $this->length    = $length;
        $this->precision = $precision;
    }

    /**
     * 获取数字的长度和精度
     * @param numeric $num 要获取的数字，受限于PHP的浮点数精度问题，实际上小数部分的具体数字超过13位就不准了，e不受影响
     * @return false|array
     */
    protected function getNumberLength($num)
    {
        if (!is_numeric($num)) {
            return false;
        }

        if ($num < 0) {
            $num = -$num;
        }

        $scientificNotation = 0;
        if (false !== stripos($num, 'e')) {
            $lengthArray        = explode('e', strtolower($num));
            $num                = $lengthArray[0];
            $scientificNotation = $lengthArray[1];
        }

        if (false !== stripos($num, '.')) {
            $numArray              = explode('.', $num);
            $integer               = $numArray[0];
            $decimalRepresentation = $numArray[1];
        } else {
            $decimalRepresentation = null;
            $integer               = $num;
        }

        if ($scientificNotation < 0) {
            $length    = 0;
            $precision = 0 != $decimalRepresentation ? strlen($decimalRepresentation) - $scientificNotation : -$scientificNotation;
        } else {
            $length = (0 != $integer ? strlen($integer) : 0) + $scientificNotation;
            if (0 != $scientificNotation && $scientificNotation > strlen($decimalRepresentation)) {
                $precision = 0;
            } else {
                $precision = strlen($decimalRepresentation);
            }
        }
        return [$length, $precision];
    }

    /**
     * 判断给定的数字是否符合长度要求
     * @param numeric $num
     * @return bool
     */
    protected function checkNumberLength(float|int|string $num): bool
    {
        list($numLength, $precision) = $this->getNumberLength($num);

        if (-1 === $this->length) {
            return true;
        }

        if (-1 !== $this->precision) {
            $length = $this->length - $this->precision;
            return $length >= $numLength && $this->precision >= $precision;
        } else {
            return $this->length >= $numLength;
        }
    }

    /**
     * 获取UTF8文本长度
     * @param null $string
     * @return int
     */
    protected function getUtf8StringLength($string = null): int
    {
        preg_match_all('/./us', $string, $match);
        return count($match[0]);
    }
}
