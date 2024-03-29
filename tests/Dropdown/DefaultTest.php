<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Dropdown;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Flowbite\Dropdown;
use UIAwesome\Html\Component\Flowbite\Item;

/**
 * Dropdown.
 *
 * This example can be used to show a dropdown menu when clicking on a button.
 *
 * @link https://flowbite.com/docs/components/dropdowns
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DefaultTest extends \PHPUnit\Framework\TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" data-dropdown-toggle="dropdown">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdown">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/dashboard">Dashboard</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/settings">Settings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/earnings">Earnings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/sign-out">Sign out</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('default', 'danger')
                ->id('dropdown')
                ->items(
                    Item::widget()->label('Dashboard')->link('/dashboard'),
                    Item::widget()->label('Settings')->link('/settings'),
                    Item::widget()->label('Earnings')->link('/earnings'),
                    Item::widget()->label('Sign out')->link('/sign-out'),
                )
                ->render()
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button" data-dropdown-toggle="dropdown">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdown">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/dashboard">Dashboard</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/settings">Settings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/earnings">Earnings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/sign-out">Sign out</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('default', 'dark')
                ->id('dropdown')
                ->items(
                    Item::widget()->label('Dashboard')->link('/dashboard'),
                    Item::widget()->label('Settings')->link('/settings'),
                    Item::widget()->label('Earnings')->link('/earnings'),
                    Item::widget()->label('Sign out')->link('/sign-out'),
                )
                ->render()
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-dropdown-toggle="dropdown">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdown">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/dashboard">Dashboard</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/settings">Settings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/earnings">Earnings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/sign-out">Sign out</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('default', 'info')
                ->id('dropdown')
                ->items(
                    Item::widget()->label('Dashboard')->link('/dashboard'),
                    Item::widget()->label('Settings')->link('/settings'),
                    Item::widget()->label('Earnings')->link('/earnings'),
                    Item::widget()->label('Sign out')->link('/sign-out'),
                )
                ->render()
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button" data-dropdown-toggle="dropdown">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdown">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/dashboard">Dashboard</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/settings">Settings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/earnings">Earnings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/sign-out">Sign out</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('default', 'success')
                ->id('dropdown')
                ->items(
                    Item::widget()->label('Dashboard')->link('/dashboard'),
                    Item::widget()->label('Settings')->link('/settings'),
                    Item::widget()->label('Earnings')->link('/earnings'),
                    Item::widget()->label('Sign out')->link('/sign-out'),
                )
                ->render()
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button" data-dropdown-toggle="dropdown">
            <span>Dropdown button</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 ms-3" aria-hidden="true" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdown">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/dashboard">Dashboard</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/settings">Settings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/earnings">Earnings</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/sign-out">Sign out</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('default', 'warning')
                ->id('dropdown')
                ->items(
                    Item::widget()->label('Dashboard')->link('/dashboard'),
                    Item::widget()->label('Settings')->link('/settings'),
                    Item::widget()->label('Earnings')->link('/earnings'),
                    Item::widget()->label('Sign out')->link('/sign-out'),
                )
                ->render()
        );
    }
}
