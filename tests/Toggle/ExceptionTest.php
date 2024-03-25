<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Toggle;

use UIAwesome\Html\Component\Flowbite\Toggle;

final class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Invalid definition: "noexist". Available definitions: "alert", "dropdown", "menu", "menu-dropdown".'
        );

        Toggle::widget()->definition('noexist', '');
    }
}
