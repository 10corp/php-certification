<?php

declare(strict_types=1);

namespace Tests\Devoceanic\Certification\ChapterOneBasics;

use Devoceanic\Certification\ChapterOneBasics\ChapterOneBitwiseOperators;
use PHPUnit\Framework\TestCase;

class ChapterOneBitwiseOperatorsTest  extends TestCase
{
    /** @var ChapterOneBitwiseOperators */
    private $chapterOneBitwiseOperators;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->chapterOneBitwiseOperators = new ChapterOneBitwiseOperators();
    }

    /**
     * @test
     */
    public function bitwiseAnd(): void
    {
        $this->assertSame(16, $this->chapterOneBitwiseOperators->bitwiseAnd(50, 25));
        $this->assertSame(0, $this->chapterOneBitwiseOperators->bitwiseAnd(100, 25));
        $this->assertSame(25, $this->chapterOneBitwiseOperators->bitwiseAnd(25, 25));
        $this->assertSame(0, $this->chapterOneBitwiseOperators->bitwiseAnd(0, 25));
        $this->assertSame(24, $this->chapterOneBitwiseOperators->bitwiseAnd(30, 25));
    }

    /**
     * @test
     */
    public function bitwiseOr(): void
    {
        $this->assertSame(59, $this->chapterOneBitwiseOperators->bitwiseOr(50, 25));
        $this->assertSame(125, $this->chapterOneBitwiseOperators->bitwiseOr(100, 25));
        $this->assertSame(25, $this->chapterOneBitwiseOperators->bitwiseOr(25, 25));
        $this->assertSame(25, $this->chapterOneBitwiseOperators->bitwiseOr(0, 25));
        $this->assertSame(31, $this->chapterOneBitwiseOperators->bitwiseOr(30, 25));
    }

    /**
     * @test
     */
    public function bitwiseXor(): void
    {
        $this->assertSame(43, $this->chapterOneBitwiseOperators->bitwiseXor(50, 25));
        $this->assertSame(125, $this->chapterOneBitwiseOperators->bitwiseXor(100, 25));
        $this->assertSame(0, $this->chapterOneBitwiseOperators->bitwiseXor(25, 25));
        $this->assertSame(25, $this->chapterOneBitwiseOperators->bitwiseXor(0, 25));
        $this->assertSame(7, $this->chapterOneBitwiseOperators->bitwiseXor(30, 25));
    }

    /**
     * @test
     */
    public function bitShiftingLeft(): void
    {
        $this->assertSame(400, $this->chapterOneBitwiseOperators->bitShiftingLeft(50, 3));
        $this->assertSame(51200, $this->chapterOneBitwiseOperators->bitShiftingLeft(50, 10));
        $this->assertSame(800, $this->chapterOneBitwiseOperators->bitShiftingLeft(25, 5));
        $this->assertSame(0, $this->chapterOneBitwiseOperators->bitShiftingLeft(0, 2));
        $this->assertSame(1280, $this->chapterOneBitwiseOperators->bitShiftingLeft(10, 7));
    }

    /**
     * @test
     */
    public function bitShiftingRight(): void
    {
        $this->assertSame(6, $this->chapterOneBitwiseOperators->bitShiftingRight(50, 3));
        $this->assertSame(0, $this->chapterOneBitwiseOperators->bitShiftingRight(50, 10));
        $this->assertSame(0, $this->chapterOneBitwiseOperators->bitShiftingRight(25, 5));
        $this->assertSame(0, $this->chapterOneBitwiseOperators->bitShiftingRight(0, 2));
        $this->assertSame(0, $this->chapterOneBitwiseOperators->bitShiftingRight(10, 7));
    }

    /**
     * @test
     */
    public function bitwiseNot(): void
    {
        $this->assertSame(-51, $this->chapterOneBitwiseOperators->bitwiseNot(50));
        $this->assertSame(-101, $this->chapterOneBitwiseOperators->bitwiseNot(100));
        $this->assertSame(-2, $this->chapterOneBitwiseOperators->bitwiseNot(1));
        $this->assertSame(-26, $this->chapterOneBitwiseOperators->bitwiseNot(25));
        $this->assertSame(-571, $this->chapterOneBitwiseOperators->bitwiseNot(570));
    }
}
