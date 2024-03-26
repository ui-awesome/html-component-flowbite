<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\Toggle;

use UIAwesome\Html\Graphic\Svg;

final class SelectorTheme
{
    /**
     * Define the toggle selector theme definition.
     *
     * @return array The toggle selector theme definition.
     *
     * @psalm-return array<string, mixed> The toggle selector theme definition.
     */
    public static function definitions(): array
    {
        return [
            'class()' => ['text-gray-700 hover:text-gray-900 dark:hover:text-white dark:text-gray-400'],
            'content()' => [
                Svg::widget()
                    ->class('hidden')
                    ->filePath(dirname(__DIR__, 2) . '/svg/moon.svg')
                    ->fill('currentColor')
                    ->height(32)
                    ->id('theme-toggle-dark-icon')
                    ->width(32),
                PHP_EOL,
                Svg::widget()
                    ->class('hidden')
                    ->filePath(dirname(__DIR__, 2) . '/svg/sun.svg')
                    ->fill('currentColor')
                    ->height(32)
                    ->id('theme-toggle-light-icon')
                    ->width(32),
            ],
            'title()' => ['Switch light/dark mode'],
        ];
    }
}
