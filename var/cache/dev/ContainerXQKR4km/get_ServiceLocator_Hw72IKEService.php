<?php

namespace ContainerXQKR4km;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hw72IKEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hw72IKE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hw72IKE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'team' => ['privates', '.errored..service_locator.hw72IKE.App\\Entity\\Team', NULL, 'Cannot autowire service ".service_locator.hw72IKE": it needs an instance of "App\\Entity\\Team" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'team' => 'App\\Entity\\Team',
        ]);
    }
}