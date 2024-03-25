<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Alert;

use UIAwesome\Html\Component\Flowbite\Alert;

final class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Invalid definition: "noexist". Available definitions: "default", "dismissible".'
        );

        Alert::widget()->definition('noexist', '');
    }
}
