<?php

namespace App\Helper;

class Html
{
    public static function style($path)
    {

        $path = 'http://'.$_SERVER['HTTP_HOST'] . '/'. $path;

        return '<link href="'.$path.'" media="screen, projection" rel="stylesheet" type="text/css">';
    }

}