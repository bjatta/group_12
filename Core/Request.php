<?php
namespace Core;

class Request
{
    public static function getPath()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        return strtolower(trim($path, '/'));
    }

    public static function get($key, $default = null)
    {
        $value = array_key_exists($key, $_REQUEST) ? $_REQUEST[$key] : $default;

        return $value;
    }

    public static function back()
    {
        $url = array_key_exists('HTTP_REFERER', $_SERVER) ? $_SERVER['HTTP_REFERER'] : '/';
        
        header('Location: ' . $url);
    }

    public static function getMethod()
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }
}