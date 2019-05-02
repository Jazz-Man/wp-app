<?php

namespace JazzMan\App;

use JazzMan\ParameterBag\ParameterBag;
use JazzMan\Traits\SingletonTrait;

/**
 * Class App.
 */
class App
{
    use SingletonTrait;

    /**
     * @var ParameterBag
     */
    private $config;

    /**
     * App constructor.
     */
    public function __construct()
    {
        $this->setConfig();
        $this->setAutoload();
    }

    private function setConfig()
    {
        add_filter('wp_app_config', function ($config) {
            $config['class_autoload'] = [
            ];

            return $config;
        });
    }

    private function setAutoload()
    {
    }
}
