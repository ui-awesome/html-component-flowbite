<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\Toggle;

use UIAwesome\Html\Helper\CssClass;

final class Dropdown
{
    private const BASE_CLASS = 'text-white bg-%1$s-700 hover:bg-%1$s-800 focus:ring-4 focus:outline-none focus:ring-%1$s-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-%1$s-600 dark:hover:bg-%1$s-700 dark:focus:ring-%1$s-800';
    private const COLOR_DROPDOWN = [
        'danger' => 'red',
        'dark' => 'gray',
        'info' => 'blue',
        'success' => 'green',
        'warning' => 'yellow',
    ];

    /**
     * Define the dropdown definition.
     *
     * @param string $type The dropdown type. Available types: 'blue', 'gray', 'green', 'red', 'yellow'.
     *
     * @return array The dropdown definition.
     */
    public static function definition(string $type): array
    {
        $type = self::COLOR_DROPDOWN[$type] ?? 'gray';

        return [
            'class()' => [CssClass::render($type, self::BASE_CLASS, self::COLOR_DROPDOWN)],
            'dataDropdownToggle()' => [],
            'iconFilePath()' => [dirname(__DIR__, 2) . '/svg/chevron-down.svg'],
            'iconTag()' => ['svg'],
            'toggleContent()' => ['Dropdown button'],
        ];
    }
}
