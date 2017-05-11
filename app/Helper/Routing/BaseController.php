<?php


namespace App\Helper\Routing;


abstract class BaseController
{

    public function view($path, $assign = [])
    {
        $resource = __DIR__ .'/../../../resources/'.$path.'.php';

        extract($assign);

        require_once($resource);
    }
}