<?php

namespace app\routes;

class Routes
{
    public static function get(){
        return [
            'get' => [
                '/' => 'HomeController@index',
                '/user/[0-9]+' => 'UserControler@show',
                '/register' => 'UserController@store',
            ],
            'post' => []
        ];
    }
}