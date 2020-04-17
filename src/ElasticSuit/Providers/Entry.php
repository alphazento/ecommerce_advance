<?php

namespace ZentoAdv\ElasticSuit\Providers;

use Illuminate\Support\ServiceProvider;
use ZentoAdv\ElasticSuit\Elasticsearch\Connection;
use DB;

class Entry extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['db']->extend('elasticsearch', function($config, $name) {
            $config['name'] = $name;
            return new Connection($config['database'], $config['prefix'], $config);
        });
    }

}
