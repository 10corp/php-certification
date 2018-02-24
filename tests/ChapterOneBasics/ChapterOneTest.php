<?php

declare(strict_types=1);

namespace Tests\Devoceanic\Certification\ChapterOneBasics;

use Devoceanic\Certification\ChapterOneBasics\ChapterOne;
use PHPUnit\Framework\TestCase;

class ChapterOneTest extends TestCase
{
    /** @var ChapterOne */
    private $chapterOne;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->chapterOne = new ChapterOne();
    }

    /**
     * @test
     */
    public function echoMethodInLowercase(): void
    {
        $this->expectOutputString('Hello world');
        $this->chapterOne->echoMethodInLowercase();
    }

    /**
     * @test
     */
    public function echoMethodInUppercase(): void
    {
        $this->expectOutputString('Hello world');
        $this->chapterOne->echoMethodInUppercase();
    }

    /**
     * @test
     */
    public function useConstantCreatedByKeyword(): void
    {
        $this->assertSame('Constant with reserved keyword', $this->chapterOne->useConstantCreatedByKeyword());
    }

    /**
     * @test
     */
    public function useConstantCreateByMethod(): void
    {
        $this->assertSame('Constant with method', $this->chapterOne->useConstantCreateByMethod());
    }

    /**
     * @test
     */
    public function useAndWordOperator(): void
    {
        $this->assertTrue($this->chapterOne->useAndWordOperator(true, false));
        $this->assertTrue($this->chapterOne->useAndWordOperator(true, true));
        $this->assertFalse($this->chapterOne->useAndWordOperator(false, true));
        $this->assertFalse($this->chapterOne->useAndWordOperator(false, false));
    }

    /**
     * @test
     */
    public function useAndWordOperatorWithoutAssignValue(): void
    {
        $this->assertFalse($this->chapterOne->useAndWordOperatorWithoutAssignValue(true, false));
        $this->assertTrue($this->chapterOne->useAndWordOperatorWithoutAssignValue(true, true));
        $this->assertFalse($this->chapterOne->useAndWordOperatorWithoutAssignValue(false, true));
        $this->assertFalse($this->chapterOne->useAndWordOperatorWithoutAssignValue(false, false));
    }

    /**
     * @test
     */
    public function useAndSymbolOperator(): void
    {
        $this->assertFalse($this->chapterOne->useAndSymbolOperator(true, false));
        $this->assertTrue($this->chapterOne->useAndSymbolOperator(true, true));
        $this->assertFalse($this->chapterOne->useAndSymbolOperator(false, true));
        $this->assertFalse($this->chapterOne->useAndSymbolOperator(false, false));
    }

    /**
     * @test
     */
    public function useAndSymbolOperatorWithoutAssignValue(): void
    {
        $this->assertFalse($this->chapterOne->useAndSymbolOperatorWithoutAssignValue(true, false));
        $this->assertTrue($this->chapterOne->useAndSymbolOperatorWithoutAssignValue(true, true));
        $this->assertFalse($this->chapterOne->useAndSymbolOperatorWithoutAssignValue(false, true));
        $this->assertFalse($this->chapterOne->useAndSymbolOperatorWithoutAssignValue(false, false));
    }

    /**
     * @test
     */
    public function ternaryOperator(): void
    {
        $firstValue = 'Hello';
        $secondValue = 'world';

        $this->assertSame(
            $firstValue,
            $this->chapterOne->ternaryOperator(true, $firstValue, $secondValue)
        );
        $this->assertSame(
            $secondValue,
            $this->chapterOne->ternaryOperator(false, $firstValue, $secondValue)
        );
    }

    /**
     * @test
     */
    public function spaceshipOperator(): void
    {
        $this->assertSame(1, $this->chapterOne->spaceshipOperator(1, 0));
        $this->assertSame(0, $this->chapterOne->spaceshipOperator(0, 0));
        $this->assertSame(-1, $this->chapterOne->spaceshipOperator(1, 2));
        $this->assertSame(1, $this->chapterOne->spaceshipOperator('apples', 'Bananas'));
        $this->assertSame(-1, $this->chapterOne->spaceshipOperator('Apples', 'bananas'));
        $this->assertSame(1, $this->chapterOne->spaceshipOperator(1, 'bananas'));
    }

    /**
     * @test
     */
    public function bitwiseAnd(): void
    {
        $this->assertSame(16, $this->chapterOne->bitwiseAnd(50, 25));
        $this->assertSame(0, $this->chapterOne->bitwiseAnd(100, 25));
        $this->assertSame(25, $this->chapterOne->bitwiseAnd(25, 25));
        $this->assertSame(0, $this->chapterOne->bitwiseAnd(0, 25));
        $this->assertSame(24, $this->chapterOne->bitwiseAnd(30, 25));
    }

    /**
     * @test
     */
    public function bitwiseOr(): void
    {
        $this->assertSame(59, $this->chapterOne->bitwiseOr(50, 25));
        $this->assertSame(125, $this->chapterOne->bitwiseOr(100, 25));
        $this->assertSame(25, $this->chapterOne->bitwiseOr(25, 25));
        $this->assertSame(25, $this->chapterOne->bitwiseOr(0, 25));
        $this->assertSame(31, $this->chapterOne->bitwiseOr(30, 25));
    }

    /**
     * @test
     */
    public function bitwiseXor(): void
    {
        $this->assertSame(43, $this->chapterOne->bitwiseXor(50, 25));
        $this->assertSame(125, $this->chapterOne->bitwiseXor(100, 25));
        $this->assertSame(0, $this->chapterOne->bitwiseXor(25, 25));
        $this->assertSame(25, $this->chapterOne->bitwiseXor(0, 25));
        $this->assertSame(7, $this->chapterOne->bitwiseXor(30, 25));
    }

    /**
     * @test
     */
    public function bitShiftingLeft(): void
    {
        $this->assertSame(400, $this->chapterOne->bitShiftingLeft(50, 3));
        $this->assertSame(51200, $this->chapterOne->bitShiftingLeft(50, 10));
        $this->assertSame(800, $this->chapterOne->bitShiftingLeft(25, 5));
        $this->assertSame(0, $this->chapterOne->bitShiftingLeft(0, 2));
        $this->assertSame(1280, $this->chapterOne->bitShiftingLeft(10, 7));
    }

    /**
     * @test
     */
    public function bitShiftingRight(): void
    {
        $this->assertSame(6, $this->chapterOne->bitShiftingRight(50, 3));
        $this->assertSame(0, $this->chapterOne->bitShiftingRight(50, 10));
        $this->assertSame(0, $this->chapterOne->bitShiftingRight(25, 5));
        $this->assertSame(0, $this->chapterOne->bitShiftingRight(0, 2));
        $this->assertSame(0, $this->chapterOne->bitShiftingRight(10, 7));
    }

    /**
     * @test
     */
    public function bitwiseNot(): void
    {
        $this->assertSame(-51, $this->chapterOne->bitwiseNot(50));
        $this->assertSame(-101, $this->chapterOne->bitwiseNot(100));
        $this->assertSame(-2, $this->chapterOne->bitwiseNot(1));
        $this->assertSame(-26, $this->chapterOne->bitwiseNot(25));
        $this->assertSame(-571, $this->chapterOne->bitwiseNot(570));
    }
}
