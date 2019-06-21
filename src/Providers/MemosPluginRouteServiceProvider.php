<?php
/**
 * Created by PhpStorm.
 * User: tsmekal
 * Date: 6/21/2019
 * Time: 7:52 AM
 */

namespace MemosPlugin\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class MemosPluginRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('memos','MemosPlugin\Controllers\ContentController@sayHello');
    }
}