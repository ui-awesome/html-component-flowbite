<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\Dropdown;

use UIAwesome\Html\Component\Flowbite\Toggle;

final class Defaults
{
    /**
     * Define the dropdown definition.
     *
     * @param string $color The toggle dropdown color. Available colors: 'blue', 'gray', 'green', 'red', 'yellow'.
     *
     * @return array The dropdown definition.
     */
    public static function definition(string $color): array
    {
        return [
            'class()' => ['z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700'],
            'linkClass()' => ['block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'],
            'listClass()' => ['py-2 text-sm text-gray-700 dark:text-gray-200'],
            'toggle()' => [Toggle::widget()->cookbook('dropdown', $color)],
        ];
    }
}
