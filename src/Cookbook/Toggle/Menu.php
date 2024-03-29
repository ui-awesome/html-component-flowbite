<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\Toggle;

final class Menu
{
    /**
     * Define the menu definition.
     *
     * @return array The menu definition.
     */
    public static function definition(): array
    {
        return [
            'ariaExpanded()' => ['false'],
            'ariaControls()' => [],
            'class()' => ['inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600'],
            'dataCollapseToggle()' => [],
            'iconFilePath()' => [dirname(__DIR__, 2) . '/svg/toggle.svg'],
            'iconTag()' => ['svg'],
            'toggleClass()' => ['sr-only'],
            'toggleContent()' => ['Open main menu'],
        ];
    }
}
