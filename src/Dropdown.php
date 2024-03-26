<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use PHPForge\Widget\Factory\SimpleFactory;
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
     * Define the drodpown definition.
     *
     * @param string $definition The dropdown definition. Available definitions: 'default'.
     * @param string $color The toggle dropdown color. Available colors: 'blue', 'gray', 'green', 'red', 'yellow'.
     *
     * @return self A new instance or clone of the current object with the applied definition.
     */
    public function definition(string $definition, string $color): self
    {
        $definition = match ($definition) {
            'default' => Defaults::definition($color),
            'language' => Language::definitions($color),
            default => throw new \InvalidArgumentException(
                sprintf(
                    'Invalid definition: "%s". Available definitions: "default".',
                    $definition
                )
            ),
        };

        return SimpleFactory::configure($this, $definition);
    }
}
