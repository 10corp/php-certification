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
        $this->assertTrue($this->chapterOne->useAndWordOperator(true, false));
        $this->assertTrue($this->chapterOne->useAndWordOperator(true, true));
        $this->assertFalse($this->chapterOne->useAndWordOperator(false, true));
        $this->assertFalse($this->chapterOne->useAndWordOperator(false, false));
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
}
