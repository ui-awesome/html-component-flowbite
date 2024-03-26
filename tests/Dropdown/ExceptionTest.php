<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Dropdown;

use UIAwesome\Html\Component\Flowbite\Dropdown;

final class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid definition: "noexist". Available definitions: "default".');

        Dropdown::widget()->definition('noexist', '');
    }
}
