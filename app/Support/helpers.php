<?php
/**
 * Created by PhpStorm.
 * User: ahmet
 * Date: 30.03.2018
 * Time: 10:41
 */

use Illuminate\Support\Str;

/**
 * Generate a URL friendly "slug" from a given string.
 *
 * @param  string $title
 * @param  string $separator
 * @return string
 */
function str_slug($title, $separator = '-')
{
    $title = str_replace(
        ['ü', 'Ü', 'ö', 'Ö'],
        ['u', 'U', 'o', 'O'],
        $title
    );

    return Str::slug($title, $separator);
}