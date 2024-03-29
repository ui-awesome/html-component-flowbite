<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use UIAwesome\Html\{
    Component\Flowbite\Cookbook\Toggle\Alert,
    Component\Flowbite\Cookbook\Toggle\Dropdown,
    Component\Flowbite\Cookbook\Toggle\Menu,
    Component\Flowbite\Cookbook\Toggle\MenuDropdown,
    Component\Flowbite\Cookbook\Toggle\SelectorLanguage,
    Component\Flowbite\Cookbook\Toggle\SelectorTheme,
    Core\Component\AbstractToggle
};

/**
 * The `Toggle` component is a simple `HTML` component that can be used to create a toggle button.
 */
final class Toggle extends AbstractToggle
{
    /**
     * The cookbook definitions for the toggle component.
     *
     * @param string $option The option to load the cookbook for.
     * Available definitions: 'alert', 'dropdown', 'menu', 'menu-dropdown', 'selector-language', 'selector-theme'.
     *
     * @return array The toggle cookbook definitions.
     */
    protected function getCookbooks(string $option): array
    {
        return [
            'alert' => Alert::definition($option),
            'dropdown' => Dropdown::definition($option),
            'menu' => Menu::definition(),
            'menu-dropdown' => MenuDropdown::definition(),
            'selector-language' => SelectorLanguage::definition($option),
            'selector-theme' => SelectorTheme::definition(),
        ];
    }
}
