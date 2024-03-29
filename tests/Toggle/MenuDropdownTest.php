<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Toggle;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Flowbite\Toggle;

final class MenuDropdownTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" type="button" aria-expanded="false">
            Dropdown
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            HTML,
            Toggle::widget()->cookbook('menu-dropdown')->render()
        );
    }
}
