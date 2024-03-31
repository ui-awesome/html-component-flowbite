<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Alert;

use PHPForge\Support\Assert;
use UIAwesome\Html\{Component\Flowbite\Alert, Core\HTMLBuilder};

final class DefaultTest extends \PHPUnit\Framework\TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" id="alert_658fec01ac6cf" role="alert">
            <span class="font-medium">Danger alert!.</span> Change a few things up and try submitting again.
            </div>
            HTML,
            Alert::widget()
                ->content(
                    HTMLBuilder::createTag('span', 'Danger alert!.', ['class' => 'font-medium']),
                    ' Change a few things up and try submitting again.',
                )
                ->cookbook('default', 'danger')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="p-4 mb-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-400" id="alert_658fec01ac6cf" role="alert">
            <span class="font-medium">Dark alert!.</span> Change a few things up and try submitting again.
            </div>
            HTML,
            Alert::widget()
                ->content(
                    HTMLBuilder::createTag('span', 'Dark alert!.', ['class' => 'font-medium']),
                    ' Change a few things up and try submitting again.',
                )
                ->cookbook('default', 'dark')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" id="alert_658fec01ac6cf" role="alert">
            <span class="font-medium">Info alert!.</span> Change a few things up and try submitting again.
            </div>
            HTML,
            Alert::widget()
                ->content(
                    HTMLBuilder::createTag('span', 'Info alert!.', ['class' => 'font-medium']),
                    ' Change a few things up and try submitting again.',
                )
                ->cookbook('default', 'info')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" id="alert_658fec01ac6cf" role="alert">
            <span class="font-medium">Success alert!.</span> Change a few things up and try submitting again.
            </div>
            HTML,
            Alert::widget()
                ->content(
                    HTMLBuilder::createTag('span', 'Success alert!.', ['class' => 'font-medium']),
                    ' Change a few things up and try submitting again.',
                )
                ->cookbook('default', 'success')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400" id="alert_658fec01ac6cf" role="alert">
            <span class="font-medium">Warning alert!.</span> Change a few things up and try submitting again.
            </div>
            HTML,
            Alert::widget()
                ->content(
                    HTMLBuilder::createTag('span', 'Warning alert!.', ['class' => 'font-medium']),
                    ' Change a few things up and try submitting again.',
                )
                ->cookbook('default', 'warning')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }
}
