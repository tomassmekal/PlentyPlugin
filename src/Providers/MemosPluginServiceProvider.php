<?php
/**
 * Created by PhpStorm.
 * User: tsmekal
 * Date: 6/21/2019
 * Time: 7:49 AM
 */

namespace MemosPlugin\Providers;

use Plenty\Plugin\ServiceProvider;

class MemosPluginServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(MemosPluginRouteServiceProvider::class);
    }

}