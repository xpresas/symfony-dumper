<?php
/**
 * Plugin Name: Symfony Dumper for WordPress
 * Description: Enables Symfony's dump() and dd() functions in WordPress for development.
 * Version: 1.0
 * Author: https://github.com/xpresas
 */

// Load Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Make dump() and dd() globally available
if (!function_exists('dump')) {
    function dump(...$vars) {
        foreach ($vars as $v) {
            Symfony\Component\VarDumper\VarDumper::dump($v);
        }
    }
}

if (!function_exists('dd')) {
    function dd(...$vars) {
        foreach ($vars as $v) {
            Symfony\Component\VarDumper\VarDumper::dump($v);
        }
        die(1);
    }
}