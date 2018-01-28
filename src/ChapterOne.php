<?php

declare(strict_types=1);

namespace Devoceanic\Certification;

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
}