<?php

namespace app\core;

class Router
{
    public static function run()
    {
        $routerRegistered = new RoutersFilters;
        $router = $routerRegistered->get();

        dd($router);
    }
}