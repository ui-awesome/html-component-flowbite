<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use UIAwesome\Html\{Component\Flowbite\Cookbook\NavBar\Defaults, Core\Component\AbstractNavBar};

/**
 * A simple navbar component for displaying a navigation bar.
 *
 * @link https://flowbite.com/docs/components/navbars/
 */
final class NavBar extends AbstractNavBar
{
    /**
     * The cookbook definitions for the navbar component.
     *
     * @param string $option The option to load the cookbook for.
     * Available definitions: 'default'.
     *
     * @return array The navbar cookbook definitions.
     */
    protected function getCookbooks(string $option): array
    {
        return [
            'default' => Defaults::definition(),
        ];
    }
}
