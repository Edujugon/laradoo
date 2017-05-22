<?php
/**
 * Project: laradoo.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 10/5/17
 * Time: 16:04
 */

/**
 * Get configuration array data.
 *
 * @return array
 */
function laradooConfig()
{
    if (function_exists('config_path')) {
        if (file_exists(config_path('laradoo.php'))) {
            $configuration = include(config_path('laradoo.php'));

            return $configuration;
        }
    }

    $configuration = include(__DIR__ . '/../Config/config.php');

    return $configuration;
}

/**
 * Add Character to a given string if char no exists.
 * By default is concatenated either prefix and suffix.
 *
 * @param $text
 * @param $char
 * @param bool $prefix
 * @param bool $suffix
 * @return string
 */
function laradooAddCharacter($text, $char, $prefix = true, $suffix = true)
{
    if ($prefix && substr($text, 0, 1) !== $char)
        $text = $char . $text;

    if ($suffix && substr($text, -1, 1) !== $char)
        $text = $text . $char;

    return $text;
}

/**
 * Remove Character to a given string if char exists.
 * By default is removed from both side.
 *
 * @param $text
 * @param $char
 * @param bool $prefix
 * @param bool $suffix
 * @return string
 */
function laradooRemoveCharacter($text, $char, $prefix = true, $suffix = true)
{
    if ($prefix && substr($text, 0, 1) === $char)
        $text = substr($text,1);

    if ($suffix && substr($text, -1, 1) === $char)
        $text = substr($text,0,-1);

    return $text;
}