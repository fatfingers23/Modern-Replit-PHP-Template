# Modern PHP Template For Repl.it
[![Run on Repl.it](https://repl.it/badge/github/fatfingers23/Modern-Replit-PHP-Template.git)](https://repl.it/github/fatfingers23/Modern-Replit-PHP-Template.git)

This is a super simple PHP template to help you bootstrap your PHP projects on [Repl.it](https://repl.it). It is a bare-bones template with a few examples to help you get going. Can find the source code on [GitHub](https://github.com/fatfingers23/Modern-Replit-PHP-Template).

## Features
* [intelephense](https://intelephense.com) as a language server for code intelligence inside of Replit.
* [Composer](https://packagist.org) for package manager.
* [Pest](https://pestphp.com) for unit tests.
* HTML template with [tailwindcss](https://tailwindcss.com) and [daisyui](https://daisyui.com) included.

## Layout
* `app` - This is where the logic of your application lives. The files are divided into classes like any other OOP language.
  * `HelloWorld.php` - This is just a simple PHP class demonstrating PHP classes.
* `public` - This holds any public accessible PHP files
  * `index.php` - Entrypoint for the web app showing how to instantiate a class and use its method and showing how PHP and HTML work together. Styled with [tailwindcss](https://tailwindcss.com) and [daisyui](https://daisyui.com).
  * `tests` - This folder holds any tests you make for the project using [Pest](https://pestphp.com).

## Composer scripts

`composer test` - Run this in the shell to run your Pest tests.

## Setup
1. Open your Replit shell.
2. Type in `composer install` and press `enter`. This installs the composer packages needed to make the application run.
