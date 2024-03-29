<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite;

use UIAwesome\Html\{Component\Flowbite\Cookbook\Breadcrumb\Defaults, Core\Component\AbstractBreadcrumb};

/**
 * A simple breadcrumb component for displaying the current page location.
 *
 * @link https://flowbite.com/docs/components/breadcrumb/
 */
final class Breadcrumb extends AbstractBreadcrumb
{
    /**
     * The cookbook definitions for the breadcrumb component.
     *
     * @param string $option The option to load the cookbook for.
     * Available definitions: 'default'.
     *
     * @return array The breadcrumb cookbook definitions.
     */
    protected function getCookbooks(string $option): array
    {
        return [
            'default' => Defaults::definition(),
        ];
    }
}
