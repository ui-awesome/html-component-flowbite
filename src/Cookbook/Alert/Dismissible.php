<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\Alert;

use UIAwesome\Html\{Component\Flowbite\Toggle, Helper\CssClass};

final class Dismissible
{
    private const BASE_CLASS = 'flex items-center justify-center p-4 mb-4 text-%1$s-800 rounded-lg bg-%1$s-50 dark:bg-gray-800 dark:text-%1$s-400';
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
        return [
            'class()' => [CssClass::render(self::TYPES_ALERT[$type], self::BASE_CLASS, self::TYPES_ALERT)],
            'containerClass()' => ['ml-3 text-sm font-medium'],
            'containerTag()' => [],
            'toggle()' => [Toggle::widget()->cookbook('alert', $type)],
        ];
    }
}
