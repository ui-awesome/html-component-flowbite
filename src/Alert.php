<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use PHPForge\Widget\Factory\SimpleFactory;
use UIAwesome\Html\{
    Component\Flowbite\Cookbook\Alert\Defaults,
    Component\Flowbite\Cookbook\Alert\Dismissible,
    Core\Component\AbstractAlert
};

use function sprintf;

/**
 * A simple alert component for displaying messages to the user.
 *
 * @link https://flowbite.com/docs/components/alerts/
 */
final class Alert extends AbstractAlert
{
    /**
     * Define the alert definition.
     *
     * @param string $definition The alert definition. Available definitions: 'default', 'dismissible'.
     * @param string $type The alert type. Available types: 'danger', 'dark', 'info', 'success', 'warning'.
     *
     * @return self A new instance or clone of the current object with the applied definition.
     */
    public function definition(string $definition, string $type): self
    {
        $definition = match ($definition) {
            'default' => Defaults::definition($type),
            'dismissible' => Dismissible::definition($type),
            default => throw new \InvalidArgumentException(
                sprintf(
                    'Invalid definition: "%s". Available definitions: "default", "dismissible".',
                    $definition
                )
            ),
        };

        return SimpleFactory::configure($this, $definition);
    }
}
