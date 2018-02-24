<?php

declare(strict_types=1);

namespace Devoceanic\Certification\ChapterOneBasics;

define('CONSTANT_WITH_METHOD', 'Constant with method');
const CONSTANT_KEYWORD = 'Constant with reserved keyword';

class ChapterOne
{
    public function echoMethodInLowercase(): void
    {
        echo 'Hello world';
    }

    public function echoMethodInUppercase(): void
    {
        ECHO 'Hello world';
    }

    /**
     * @return string
     */
    public function useConstantCreatedByKeyword(): string
    {
        return CONSTANT_KEYWORD;
    }

    /**
     * @return string
     */
    public function useConstantCreateByMethod(): string
    {
        return CONSTANT_WITH_METHOD;
    }

    /**
     * @param bool $firstValue
     * @param bool $secondValue
     *
     * @return bool
     */
    public function useAndWordOperator(bool $firstValue, bool $secondValue): bool
    {
        $result = $firstValue and $secondValue;
        return $result;
    }

    /**
     * @param bool $firstValue
     * @param bool $secondValue
     *
     * @return bool
     */
    public function useAndWordOperatorWithoutAssignValue(bool $firstValue, bool $secondValue): bool
    {
        return $firstValue and $secondValue;
    }

    /**
     * @param bool $firstValue
     * @param bool $secondValue
     *
     * @return bool
     */
    public function useAndSymbolOperator(bool $firstValue, bool $secondValue): bool
    {
        $result = $firstValue && $secondValue;
        return $result;
    }

    /**
     * @param bool $firstValue
     * @param bool $secondValue
     *
     * @return bool
     */
    public function useAndSymbolOperatorWithoutAssignValue(bool $firstValue, bool $secondValue): bool
    {
        return $firstValue && $secondValue;
    }

    /**
     * @param bool $condition
     * @param string $firstValue
     * @param string $secondValue
     *
     * @return string
     */
    public function ternaryOperator(bool $condition, string $firstValue, string $secondValue): string
    {
        return $condition ? $firstValue : $secondValue;
    }

    /**
     * @param mixed $firstValue
     * @param mixed $secondValue
     *
     * @return int
     */
    public function spaceshipOperator($firstValue, $secondValue): int
    {
        return $firstValue <=> $secondValue;
    }

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