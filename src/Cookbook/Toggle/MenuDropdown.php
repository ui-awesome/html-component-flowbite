<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Cookbook\Toggle;

final class MenuDropdown
{
    /**
     * Define the menu dropdown definition.
     *
     * @return array The menu dropdown definition.
     *
     * @psalm-return array<string, mixed> The menu dropdown definition.
     */
    public static function definition(): array
    {
        return [
            'ariaExpanded()' => ['false'],
            'class()' => ['flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent'],
            'content()' => ['Dropdown'],
            'dataDropdownToggle()' => [],
            'iconFilePath()' => [dirname(__DIR__, 2) . '/svg/dropdown-down.svg'],
            'iconTag()' => ['svg'],
            'template()' => ['{toggle}\n{content}\n{icon}'],
        ];
    }
}
