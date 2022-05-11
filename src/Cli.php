<?php
/**
 * File for greeting function
 * php version 8.2
 * 
 * @category MyClass
 * @package  MyPackage
 * @author   Nikita Loginov <zxcasdqwe4132@mail.ru>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/goodwoor/php-project-lvl1
 */

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Implements Brain_Games_start().
 *
 * Displays the greeting text
 *
 * @return void
 */
function Brain_Games_start()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
