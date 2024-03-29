<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Toggle;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Flowbite\Toggle;

final class DropdownTest extends \PHPUnit\Framework\TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            HTML,
            Toggle::widget()->cookbook('dropdown', 'danger')->render()
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            HTML,
            Toggle::widget()->cookbook('dropdown', 'dark')->render()
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            HTML,
            Toggle::widget()->cookbook('dropdown', 'info')->render()
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            HTML,
            Toggle::widget()->cookbook('dropdown', 'success')->render()
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            HTML,
            Toggle::widget()->cookbook('dropdown', 'warning')->render()
        );
    }
}
