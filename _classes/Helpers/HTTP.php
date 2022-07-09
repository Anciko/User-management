<?php
namespace Helpers;

class HTTP
{
    static $base = "http://localhost/php_project";
    public static function redirect($path, $query = "")
    {
        $url = static::$base . $path;
        if ($query) {
            $url .= "?$query";
        }

        header("location: $url");
        exit();
    }
}
