<?php

namespace ContainerXQKR4km;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WVXjoVxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wVXjoVx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wVXjoVx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'playerCreationService' => ['privates', 'App\\Service\\PlayerCreationService', 'getPlayerCreationServiceService', true],
            'playerRepository' => ['privates', 'App\\Repository\\PlayerRepository', 'getPlayerRepositoryService', true],
            'team' => ['privates', '.errored..service_locator.wVXjoVx.App\\Entity\\Team', NULL, 'Cannot autowire service ".service_locator.wVXjoVx": it needs an instance of "App\\Entity\\Team" but this type has been excluded in "config/services.yaml".'],
            'teamRepository' => ['privates', 'App\\Repository\\TeamRepository', 'getTeamRepositoryService', true],
            'transferService' => ['privates', 'App\\Service\\TransferService', 'getTransferServiceService', true],
        ], [
            'playerCreationService' => 'App\\Service\\PlayerCreationService',
            'playerRepository' => 'App\\Repository\\PlayerRepository',
            'team' => 'App\\Entity\\Team',
            'teamRepository' => 'App\\Repository\\TeamRepository',
            'transferService' => 'App\\Service\\TransferService',
        ]);
    }
}