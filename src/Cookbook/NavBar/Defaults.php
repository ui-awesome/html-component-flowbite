<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\NavBar;

use UIAwesome\Html\Component\Flowbite\Toggle;

final class Defaults
{
    /**
     * Define the navbar definition.
     *
     * @return array The navbar definition.
     */
    public static function definition(): array
    {
        return [
            'brandLinkClass()' => ['flex items-center space-x-3 rtl:space-x-reverse'],
            'class()' => ['bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700'],
            'containerMenuClass()' => ['max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4'],
            'menuDefaultDefinitions()' => [
                [
                    'class()' => ['hidden w-full md:block md:w-auto'],
                    'dropdownDefaultDefinitions()' => [
                        [
                            'class()' => ['z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600'],
                            'containerTag()' => [false],
                            'linkClass()' => ['block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'],
                            'listClass()' => ['py-2 text-sm text-gray-700 dark:text-gray-400'],
                            'toggle()' => [Toggle::widget()->cookbook('menu-dropdown', 'gray')],
                        ],
                    ],
                    'linkAriaCurrent()' => [],
                    'linkActiveClass()' => ['block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500'],
                    'linkClass()' => ['block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent'],
                    'listClass()' => ['font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700'],
                    'toggle()' => [Toggle::widget()->cookbook('menu', 'gray')],
                ],
            ],
        ];
    }
}
