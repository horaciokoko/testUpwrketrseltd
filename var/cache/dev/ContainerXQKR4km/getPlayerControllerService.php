<?php

namespace ContainerXQKR4km;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlayerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PlayerController' shared autowired service.
     *
     * @return \App\Controller\PlayerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PlayerController.php';

        $container->services['App\\Controller\\PlayerController'] = $instance = new \App\Controller\PlayerController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\PlayerController', $container));

        return $instance;
    }
}
