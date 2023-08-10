<?php

namespace Container075VcOD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RyNM04vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ryNM04v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ryNM04v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'OrderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
        ], [
            'OrderRepository' => 'App\\Repository\\OrderRepository',
        ]);
    }
}
