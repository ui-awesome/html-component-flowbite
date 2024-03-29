<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use UIAwesome\Html\{
    Component\Flowbite\Cookbook\Alert\Defaults,
    Component\Flowbite\Cookbook\Alert\Dismissible,
    Core\Component\AbstractAlert
};

/**
 * A simple alert component for displaying messages to the user.
 *
 * @link https://flowbite.com/docs/components/alerts/
 */
final class Alert extends AbstractAlert
{
    /**
     * The cookbook definitions for the alert component.
     *
     * @param string $option The option to load the cookbook for.
     * Available definitions: 'default', 'dismissible'.
     *
     * @return array The alert cookbook definitions.
     */
    protected function getCookbooks(string $option): array
    {
        return [
            'default' => Defaults::definition($option),
            'dismissible' => Dismissible::definition($option),
        ];
    }
}
