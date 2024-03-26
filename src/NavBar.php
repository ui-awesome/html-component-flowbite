<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use UIAwesome\Html\{Component\Flowbite\Cookbook\NavBar\Defaults, Core\Component\AbstractNavBar};

use function array_merge;

/**
 * A simple navbar component for displaying a navigation bar.
 *
 * @link https://flowbite.com/docs/components/navbars/
 */
final class NavBar extends AbstractNavBar
{
    protected function loadDefaultDefinitions(): array
    {
        return array_merge(parent::loadDefaultDefinitions(), Defaults::definition());
    }
}
