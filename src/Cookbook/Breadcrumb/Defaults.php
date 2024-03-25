<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\Breadcrumb;

use UIAwesome\Html\Graphic\Svg;

final class Defaults
{
    public static function definition(): array
    {
        return [
            'class()' => ['flex'],
            'firstLinkClass()' => ['inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white'],
            'linkActiveClass()' => ['ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400', true],
            'linkActiveTag()' => ['span'],
            'linkClass()' => ['ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white'],
            'linkContainerClass()' => ['flex items-center'],
            'linkContainerTag()' => [],
            'listClass()' => ['inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse'],
            'listItemAriaCurrent()' => [],
            'separator()' => [Svg::widget()->filePath(dirname(__DIR__, 2) . '/svg/chevron-right.svg')->render()],
        ];
    }
}
