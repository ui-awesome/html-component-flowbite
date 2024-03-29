<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use UIAwesome\Html\{
    Component\Flowbite\Cookbook\Dropdown\Defaults,
    Component\Flowbite\Cookbook\Dropdown\Language,
    Core\Component\AbstractDropdown
};

/**
 * A simple dropdown component for displaying a list of links.
 *
 * @link https://flowbite.com/docs/components/dropdowns/
 */
final class Dropdown extends AbstractDropdown
{
    /**
     * The cookbook definitions for the dropdown component.
     *
     * @param string $option The option to load the cookbook for.
     * Available definitions: 'default', 'language'.
     *
     * @return array The dropdown cookbook definitions.
     */
    protected function getCookbooks(string $option): array
    {
        return [
            'default' => Defaults::definition($option),
            'language' => Language::definition($option),
        ];
    }
}
