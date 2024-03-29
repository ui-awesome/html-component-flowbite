<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Breadcrumb;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Flowbite\{Breadcrumb, Item};

/**
 * Breadcrumb.
 *
 * The breadcrumb component is an important part of any website or application that can be used to show the current
 * location of a page in a hierarchical structure of pages.
 *
 * Flowbite includes two styles of breadcrumb elements, one that has a transparent background and a few more that come
 * with a background in different colors.
 *
 * @link https://flowbite.com/docs/components/breadcrumb/
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DefaultTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <nav class="flex" id="breadcrumb_658fec01ac6cf" aria-label="breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li>
            <div class="flex items-center">
            <a class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 me-2.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/></svg>
            Home
            </a>
            </div>
            </li>
            <li>
            <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
            <a class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white" href="projects">Projects</a>
            </div>
            </li>
            <li aria-current="page">
            <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" fill="none" viewBox="0 0 6 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/></svg>
            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
            </div>
            </li>
            </ol>
            </nav>
            HTML,
            Breadcrumb::widget()
                ->cookbook('default')
                ->currentPath('flowbite')
                ->id('breadcrumb_658fec01ac6cf')
                ->items(
                    Item::widget()
                        ->label('Home')
                        ->iconFilePath(dirname(__DIR__, 2) . '/src/svg/home.svg')
                        ->iconTag('svg')
                        ->link('/'),
                    Item::widget()->label('Projects')->link('projects'),
                    Item::widget()->label('Flowbite')->link('flowbite'),
                )
                ->render()
        );
    }
}
