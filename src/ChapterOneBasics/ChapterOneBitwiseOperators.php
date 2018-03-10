<?php

declare(strict_types=1);

namespace Devoceanic\Certification\ChapterOneBasics;

class ChapterOneBitwiseOperators
{
    /**
     * @param int $firstValue
     * @param int $secondValue
     *
     * @return int
     */
    public function bitwiseAnd(int $firstValue, int $secondValue): int
    {
        return $firstValue & $secondValue;
    }

    /**
     * @param int $firstValue
     * @param int $secondValue
     *
     * @return int
     */
    public function bitwiseOr(int $firstValue, int $secondValue): int
    {
        return $firstValue | $secondValue;
    }

    /**
     * @param int $firstValue
     * @param int $secondValue
     *
     * @return int
     */
    public function bitwiseXor(int $firstValue, int $secondValue): int
    {
        return $firstValue ^ $secondValue;
    }

    /**
     * @param int $value
     * @param int $bitsToShift
     *
     * @return int
     */
    public function bitShiftingLeft(int $value, int $bitsToShift): int
    {
        return $value << $bitsToShift;
    }

    /**
     * @param int $value
     * @param int $bitsToShift
     *
     * @return int
     */
    public function bitShiftingRight(int $value, int $bitsToShift): int
    {
        return $value >> $bitsToShift;
    }

    /**
     * @param int $value
     * ∫
     * @return int
     */
    public function bitwiseNot(int $value): int
    {
        return ~$value;
    }
}