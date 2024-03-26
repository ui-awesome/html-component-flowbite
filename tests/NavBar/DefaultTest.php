<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Flowbite\Tests\NavBar;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Flowbite\{Item, Menu, NavBar};

/**
 * Navigation bar built with the utility classes from Flowbite.
 *
 * Use this example of a navigation bar built with the utility classes from Tailwind CSS to enable users to navigate
 * across the pages of your website.
 *
 * @link https://flowbite.com/docs/components/navbar/#default-navbar
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DefaultTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a class="flex items-center space-x-3 rtl:space-x-reverse" href="https://flowbite.com/">
            <img class="h-8" src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <button class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button" aria-expanded="false" aria-controls="navbar-default" data-collapse-toggle="navbar-default">
            <span class="sr-only">Open main menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
            <a class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent text-white bg-blue-700 md:bg-transparent md:text-blue-700 md:dark:text-blue-500" href="home" aria-current="page">Home</a>
            </li>
            <li>
            <a class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="about">About</a>
            </li>
            <li>
            <a class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="service">Service</a>
            </li>
            <li>
            <a class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="pricing">Pricing</a>
            </li>
            <li>
            <a class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" href="contact">Contact</a>
            </li>
            </ul>
            </div>
            </div>
            </nav>
            HTML,
            NavBar::widget()
                ->brandLink('https://flowbite.com/')
                ->brandImage('<img class="h-8" src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo">')
                ->brandText('<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>')
                ->menu(
                    Menu::widget()
                        ->currentPath('home')
                        ->id('navbar-default')
                        ->items(
                            Item::widget()->label('Home')->link('home'),
                            Item::widget()->label('About')->link('about'),
                            Item::widget()->label('Service')->link('service'),
                            Item::widget()->label('Pricing')->link('pricing'),
                            Item::widget()->label('Contact')->link('contact'),
                        )
                )
                ->render()
        );
    }
}
