<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use UIAwesome\Html\{Component\Flowbite\Cookbook\Breadcrumb\Defaults, Core\Component\AbstractBreadcrumb};

use function array_merge;

/**
 * A simple breadcrumb component for displaying the current page location.
 *
 * @link https://flowbite.com/docs/components/breadcrumb/
 */
final class Breadcrumb extends AbstractBreadcrumb
{
    protected function loadDefaultDefinitions(): array
    {
        return array_merge(parent::loadDefaultDefinitions(), Defaults::definition());
    }
}
