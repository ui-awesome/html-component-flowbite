<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\Toggle;

use UIAwesome\Html\Helper\CssClass;

final class Alert
{
    private const BASE_CLASS = 'ml-auto -mx-1.5 -my-1.5 bg-%1$s-50 text-%1$s-500 rounded-lg focus:ring-2 focus:ring-%1$s-400 p-1.5 hover:bg-%1$s-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-%1$s-400 dark:hover:bg-gray-700';
    private const TYPES_ALERT = [
        'danger' => 'red',
        'dark' => 'gray',
        'info' => 'blue',
        'success' => 'green',
        'warning' => 'yellow',
    ];

    /**
     * Define the alert definition.
     *
     * @param string $type The alert type. Available types: 'danger', 'dark', 'info', 'success', 'warning'.
     *
     * @return array The alert definition.
     */
    public static function definition(string $type): array
    {
        $type = self::TYPES_ALERT[$type] ?? 'gray';

        return [
            'ariaLabel()' => ['Close'],
            'class()' => [CssClass::render($type, self::BASE_CLASS, self::TYPES_ALERT)],
            'dataDismissTarget()' => [],
            'iconFilePath()' => [dirname(__DIR__, 2) . '/svg/circle-close.svg'],
            'iconTag()' => ['svg'],
            'toggleClass()' => ['sr-only'],
            'toggleContent()' => ['Close'],
        ];
    }
}
