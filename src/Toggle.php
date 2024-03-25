<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use PHPForge\Widget\Factory\SimpleFactory;
use UIAwesome\Html\{
    Component\Flowbite\Cookbook\Toggle\Alert,
    Component\Flowbite\Cookbook\Toggle\Dropdown,
    Component\Flowbite\Cookbook\Toggle\Menu,
    Component\Flowbite\Cookbook\Toggle\MenuDropdown,
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
     * @return self The class instance that implements the fluent interface.
     */
    public function definition(string $definition, string $type = ''): self
    {
        $definition = match ($definition) {
            'alert' => Alert::definition($type),
            'dropdown' => Dropdown::definition($type),
            'menu' => Menu::definition(),
            'menu-dropdown' => MenuDropdown::definition(),
            default => throw new \InvalidArgumentException(
                sprintf(
                    'Invalid definition: "%s". Available definitions: "alert", "dropdown", "menu", "menu-dropdown".',
                    $definition
                )
            ),
        };

        /** @var self $toggle */
        $toggle = SimpleFactory::configure($this, $definition);

        return $toggle;
    }
}
