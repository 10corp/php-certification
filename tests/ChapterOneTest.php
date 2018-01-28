<?php

declare(strict_types=1);

namespace Tests\Devoceanic\Certification;

use Devoceanic\Certification\ChapterOne;
use PHPUnit\Framework\TestCase;

class ChapterOneTest extends TestCase
{
    /**
     * @test
     */
    public function echoMethodInLowercase()
    {
        $chapterOne = new ChapterOne();
        $this->expectOutputString('Hello world');
        $chapterOne->echoMethodInLowercase();
    }

    /**
     * @test
     */
    public function echoMethodInUppercase()
    {
        $chapterOne = new ChapterOne();
        $this->expectOutputString('Hello world');
        $chapterOne->echoMethodInUppercase();
    }
}
