<?php
/**
 * Project: skeleton-laravel-package.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 22/2/17
 * Time: 13:40
 */

/**
 * Get configuration array data.
 *
 * @return array
 */
function eConfig()
{
    if(function_exists('config_path'))
    {
        if(file_exists(config_path('sekeleton.php')))
        {
            $configuration = include(config_path('sekeleton.php'));

            return $configuration;
        }
    }

    $configuration = include(__DIR__ . '/../Config/config.php');

    return $configuration;
}