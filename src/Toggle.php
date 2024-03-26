<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use PHPForge\Widget\Factory\SimpleFactory;
use UIAwesome\Html\{
    Component\Flowbite\Cookbook\Toggle\Alert,
    Component\Flowbite\Cookbook\Toggle\Dropdown,
    Component\Flowbite\Cookbook\Toggle\Menu,
    Component\Flowbite\Cookbook\Toggle\MenuDropdown,
    Component\Flowbite\Cookbook\Toggle\SelectorLanguage,
    Core\Component\AbstractToggle
};

use function sprintf;

/**
 * The `Toggle` component is a simple `HTML` component that can be used to create a toggle button.
 */
final class Toggle extends AbstractToggle
{
    /**
     * Define the toggle definition.
     *
     * @param string $definition The toggle definition.
     * Available definitions: 'alert', 'dropdown', 'menu', 'menu-dropdown'.
     * @param string $type The toggle type.
     * Available types: 'danger', 'dark', 'info', 'success', 'warning' for 'alert' definition.
     * Available types: 'blue', 'gray', 'green', 'red', 'yellow' for 'dropdown' definition.
     *
     * @return self A new instance or clone of the current object with the applied definition.
     */
    public function definition(string $definition, string $type = ''): self
    {
        $definition = match ($definition) {
            'alert' => Alert::definition($type),
            'dropdown' => Dropdown::definition($type),
            'menu' => Menu::definition(),
            'menu-dropdown' => MenuDropdown::definition(),
            'selector-language' => SelectorLanguage::definition($type),
            default => throw new \InvalidArgumentException(
                sprintf(
                    'Invalid definition: "%s". Available definitions: "alert", "dropdown", "menu", "menu-dropdown".',
                    $definition
                )
            ),
        };

        return SimpleFactory::configure($this, $definition);
    }
}
