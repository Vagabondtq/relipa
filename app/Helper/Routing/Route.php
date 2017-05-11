<?php

namespace App\Helper\Routing;


use App\Exceptions\RouteException;

class Route
{

    protected $routes = [];

    public function __construct()
    {
    }


    public function addRoute($list_routes)
    {
        $this->routes = $list_routes;

        return $this;
    }

    public function parseUri()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = (!isset($_SERVER['REDIRECT_URL'])) ? '/' : $_SERVER['REDIRECT_URL'];

        if (!$this->hasRoute($method, $uri)) {
            throw new RouteException('Không tồn tại URL');
        }
    }

    private function hasRoute($method, $uri)
    {
        foreach ($this->routes as $k => $v) {
            $route_method = strtoupper($v['method']);
            if ($uri == $v['uri'] AND $method == $route_method) {
                return true;
            }
        }

        return false;
    }
}