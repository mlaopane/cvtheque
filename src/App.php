<?php
namespace MykeOn;

use Psr\Container\ContainerInterface;

/**
 *
 */
class App
{
    /**
     * Entry point for the API
     */
    public static function launch()
    {
        define('ROOT_DIR', dirname(__DIR__));
        define('CONFIG_DIR', ROOT_DIR.'/app/config');

        $app = new \Slim\App(["settings" => require CONFIG_DIR.'/settings.php']);

        session_start();

        require CONFIG_DIR.'/container.php';

        require CONFIG_DIR.'/routes.php';

        $app->run();
    }
}
