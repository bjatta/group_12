<?php

namespace Core;


class App
{
    private static $config;

    public static function set($key, $value)
    {
        static::$config[$key] = $value;
    }

    public static function get($key)
    {
        return static::$config[$key];
    }
}