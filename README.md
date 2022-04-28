# Modern PHP Template For Repl.it

This is a super simple PHP template to help you bootstrap your PHP projects on [Repl.it](https://repl.it). It is a bare-bones template with a few examples to help you get going. 

## Layout
* `app` - This is where the logic of your application lives. The files are divided into classes like any other OOP language.
  * `HelloWorld.php` - This is just a simple PHP class demonstrating PHP classes.
* `public` - This holds any public accessible PHP files
  * `index.php` - Entrypoint for the web app showing how to instantiate a class and use its method and showing how PHP and HTML work together.
  * `tests` - This folder holds any tests you make for the project using [Pest](https://pestphp.com).

## Composer scripts

`composer test` - Run this in the shell to run your Pest tests.
