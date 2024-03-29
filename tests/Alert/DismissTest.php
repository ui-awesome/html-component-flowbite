<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Alert;

use PHPForge\Support\Assert;
use UIAwesome\Html\{Component\Flowbite\Alert, Graphic\Svg, Textual\A};

/**
 * Alert component with Flowbite dismiss button.
 *
 * Provide contextual feedback messages for typical user actions with the handful of available and flexible alert
 * messages.
 *
 * @link https://flowbite.com/docs/components/alerts/
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DismissTest extends \PHPUnit\Framework\TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="flex items-center justify-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" id="alert_658fec01ac6cf" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg>
            <div class="ml-3 text-sm font-medium">
            A simple danger alert with an <a class="font-semibold underline hover:no-underline" href="#">example link</a>. Give it a click if you like.
            </div>
            <button class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" type="button" aria-label="Close" data-dismiss-target="#alert_658fec01ac6cf">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
            </button>
            </div>
            HTML,
            Alert::widget()
                ->content(
                    'A simple danger alert with an ',
                    A::widget()->class('font-semibold underline hover:no-underline')->content('example link')->href('#'),
                    '. Give it a click if you like.',
                )
                ->cookbook('dismissible', 'danger')
                ->id('alert_658fec01ac6cf')
                ->prefix(Svg::widget()->filePath(dirname(__DIR__, 2) . '/src/svg/circle-exclamation.svg'))
                ->render()
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="flex items-center justify-center p-4 mb-4 text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-400" id="alert_658fec01ac6cf" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg>
            <div class="ml-3 text-sm font-medium">
            A simple dark alert with an <a class="font-semibold underline hover:no-underline" href="#">example link</a>. Give it a click if you like.
            </div>
            <button class="ml-auto -mx-1.5 -my-1.5 bg-gray-50 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700" type="button" aria-label="Close" data-dismiss-target="#alert_658fec01ac6cf">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
            </button>
            </div>
            HTML,
            Alert::widget()
                ->content(
                    'A simple dark alert with an ',
                    A::widget()->class('font-semibold underline hover:no-underline')->content('example link')->href('#'),
                    '. Give it a click if you like.',
                )
                ->id('alert_658fec01ac6cf')
                ->cookbook('dismissible', 'dark')
                ->prefix(Svg::widget()->filePath(dirname(__DIR__, 2) . '/src/svg/circle-exclamation.svg'))
                ->render()
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="flex items-center justify-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" id="alert_658fec01ac6cf" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg>
            <div class="ml-3 text-sm font-medium">
            A simple dark info with an <a class="font-semibold underline hover:no-underline" href="#">example link</a>. Give it a click if you like.
            </div>
            <button class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" type="button" aria-label="Close" data-dismiss-target="#alert_658fec01ac6cf">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
            </button>
            </div>
            HTML,
            Alert::widget()
                ->content(
                    'A simple dark info with an ',
                    A::widget()->class('font-semibold underline hover:no-underline')->content('example link')->href('#'),
                    '. Give it a click if you like.',
                )
                ->cookbook('dismissible', 'info')
                ->id('alert_658fec01ac6cf')
                ->prefix(Svg::widget()->filePath(dirname(__DIR__, 2) . '/src/svg/circle-exclamation.svg'))
                ->render()
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="flex items-center justify-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" id="alert_658fec01ac6cf" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg>
            <div class="ml-3 text-sm font-medium">
            A simple success info with an <a class="font-semibold underline hover:no-underline" href="#">example link</a>. Give it a click if you like.
            </div>
            <button class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" type="button" aria-label="Close" data-dismiss-target="#alert_658fec01ac6cf">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
            </button>
            </div>
            HTML,
            Alert::widget()
                ->content(
                    'A simple success info with an ',
                    A::widget()->class('font-semibold underline hover:no-underline')->content('example link')->href('#'),
                    '. Give it a click if you like.',
                )
                ->id('alert_658fec01ac6cf')
                ->prefix(Svg::widget()->filePath(dirname(__DIR__, 2) . '/src/svg/circle-exclamation.svg'))
                ->cookbook('dismissible', 'success')
                ->render()
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="flex items-center justify-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400" id="alert_658fec01ac6cf" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg>
            <div class="ml-3 text-sm font-medium">
            A simple warning info with an <a class="font-semibold underline hover:no-underline" href="#">example link</a>. Give it a click if you like.
            </div>
            <button class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-400 dark:hover:bg-gray-700" type="button" aria-label="Close" data-dismiss-target="#alert_658fec01ac6cf">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
            </button>
            </div>
            HTML,
            Alert::widget()
                ->content(
                    'A simple warning info with an ',
                    A::widget()->class('font-semibold underline hover:no-underline')->content('example link')->href('#'),
                    '. Give it a click if you like.',
                )
                ->cookbook('dismissible', 'warning')
                ->id('alert_658fec01ac6cf')
                ->prefix(Svg::widget()->filePath(dirname(__DIR__, 2) . '/src/svg/circle-exclamation.svg'))
                ->render()
        );
    }
}
