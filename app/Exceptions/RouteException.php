<?php

namespace App\Exceptions;


use Exception;

class RouteException extends \Exception
{

    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        die($message);
    }

}