<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\Dropdown;

use PHPForge\Support\Assert;
use UIAwesome\Html\{Component\Flowbite\Dropdown, Component\Flowbite\Item};

final class LanguageTest extends \PHPUnit\Framework\TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" title="Select language" data-dropdown-toggle="selector-language">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true" width="32" height="32" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="selector-language">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/de">Deutsch</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white bg-blue-500 text-white" href="/language/en" aria-current="true">English</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/es">Español</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/fr">Français</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('language', 'danger')
                ->id('selector-language')
                ->items(
                    Item::widget()->label('Deutsch')->link('/language/de'),
                    Item::widget()->label('English')->link('/language/en')->active(),
                    Item::widget()->label('Español')->link('/language/es'),
                    Item::widget()->label('Français')->link('/language/fr'),
                )
                ->render()
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button" title="Select language" data-dropdown-toggle="selector-language">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true" width="32" height="32" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="selector-language">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/de">Deutsch</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white bg-blue-500 text-white" href="/language/en" aria-current="true">English</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/es">Español</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/fr">Français</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('language', 'dark')
                ->id('selector-language')
                ->items(
                    Item::widget()->label('Deutsch')->link('/language/de'),
                    Item::widget()->label('English')->link('/language/en')->active(),
                    Item::widget()->label('Español')->link('/language/es'),
                    Item::widget()->label('Français')->link('/language/fr'),
                )
                ->render()
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" title="Select language" data-dropdown-toggle="selector-language">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true" width="32" height="32" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="selector-language">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/de">Deutsch</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white bg-blue-500 text-white" href="/language/en" aria-current="true">English</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/es">Español</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/fr">Français</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('language', 'info')
                ->id('selector-language')
                ->items(
                    Item::widget()->label('Deutsch')->link('/language/de'),
                    Item::widget()->label('English')->link('/language/en')->active(),
                    Item::widget()->label('Español')->link('/language/es'),
                    Item::widget()->label('Français')->link('/language/fr'),
                )
                ->render()
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button" title="Select language" data-dropdown-toggle="selector-language">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true" width="32" height="32" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="selector-language">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/de">Deutsch</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white bg-blue-500 text-white" href="/language/en" aria-current="true">English</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/es">Español</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/fr">Français</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('language', 'success')
                ->id('selector-language')
                ->items(
                    Item::widget()->label('Deutsch')->link('/language/de'),
                    Item::widget()->label('English')->link('/language/en')->active(),
                    Item::widget()->label('Español')->link('/language/es'),
                    Item::widget()->label('Français')->link('/language/fr'),
                )
                ->render()
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div>
            <button class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button" title="Select language" data-dropdown-toggle="selector-language">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true" width="32" height="32" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd"/></svg>
            </button>
            <div class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="selector-language">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/de">Deutsch</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white bg-blue-500 text-white" href="/language/en" aria-current="true">English</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/es">Español</a>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="/language/fr">Français</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('language', 'warning')
                ->id('selector-language')
                ->items(
                    Item::widget()->label('Deutsch')->link('/language/de'),
                    Item::widget()->label('English')->link('/language/en')->active(),
                    Item::widget()->label('Español')->link('/language/es'),
                    Item::widget()->label('Français')->link('/language/fr'),
                )
                ->render()
        );
    }
}
