<?php

namespace ContainerXQKR4km;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_36InT2eService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.36InT2e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.36InT2e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\MarketController::buyPlayer' => ['privates', '.service_locator.J4kCUgW', 'get_ServiceLocator_J4kCUgWService', true],
            'App\\Controller\\MarketController::market' => ['privates', '.service_locator.S_gMG9C', 'get_ServiceLocator_SGMG9CService', true],
            'App\\Controller\\MarketController::putOnMarket' => ['privates', '.service_locator.3llMoIQ', 'get_ServiceLocator_3llMoIQService', true],
            'App\\Controller\\PlayerController::putOnMarket' => ['privates', '.service_locator.3llMoIQ', 'get_ServiceLocator_3llMoIQService', true],
            'App\\Controller\\TeamController::delete' => ['privates', '.service_locator.hw72IKE', 'get_ServiceLocator_Hw72IKEService', true],
            'App\\Controller\\TeamController::edit' => ['privates', '.service_locator.hw72IKE', 'get_ServiceLocator_Hw72IKEService', true],
            'App\\Controller\\TeamController::index' => ['privates', '.service_locator.2XuSl_A', 'get_ServiceLocator_2XuSlAService', true],
            'App\\Controller\\TeamController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\TeamController::show' => ['privates', '.service_locator.wVXjoVx', 'get_ServiceLocator_WVXjoVxService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\MarketController:buyPlayer' => ['privates', '.service_locator.J4kCUgW', 'get_ServiceLocator_J4kCUgWService', true],
            'App\\Controller\\MarketController:market' => ['privates', '.service_locator.S_gMG9C', 'get_ServiceLocator_SGMG9CService', true],
            'App\\Controller\\MarketController:putOnMarket' => ['privates', '.service_locator.3llMoIQ', 'get_ServiceLocator_3llMoIQService', true],
            'App\\Controller\\PlayerController:putOnMarket' => ['privates', '.service_locator.3llMoIQ', 'get_ServiceLocator_3llMoIQService', true],
            'App\\Controller\\TeamController:delete' => ['privates', '.service_locator.hw72IKE', 'get_ServiceLocator_Hw72IKEService', true],
            'App\\Controller\\TeamController:edit' => ['privates', '.service_locator.hw72IKE', 'get_ServiceLocator_Hw72IKEService', true],
            'App\\Controller\\TeamController:index' => ['privates', '.service_locator.2XuSl_A', 'get_ServiceLocator_2XuSlAService', true],
            'App\\Controller\\TeamController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\TeamController:show' => ['privates', '.service_locator.wVXjoVx', 'get_ServiceLocator_WVXjoVxService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\MarketController::buyPlayer' => '?',
            'App\\Controller\\MarketController::market' => '?',
            'App\\Controller\\MarketController::putOnMarket' => '?',
            'App\\Controller\\PlayerController::putOnMarket' => '?',
            'App\\Controller\\TeamController::delete' => '?',
            'App\\Controller\\TeamController::edit' => '?',
            'App\\Controller\\TeamController::index' => '?',
            'App\\Controller\\TeamController::new' => '?',
            'App\\Controller\\TeamController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\MarketController:buyPlayer' => '?',
            'App\\Controller\\MarketController:market' => '?',
            'App\\Controller\\MarketController:putOnMarket' => '?',
            'App\\Controller\\PlayerController:putOnMarket' => '?',
            'App\\Controller\\TeamController:delete' => '?',
            'App\\Controller\\TeamController:edit' => '?',
            'App\\Controller\\TeamController:index' => '?',
            'App\\Controller\\TeamController:new' => '?',
            'App\\Controller\\TeamController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
