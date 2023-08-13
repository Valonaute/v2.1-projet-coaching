<?php

namespace ContainerTiFqqYu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderListControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Order\OrderListController' shared autowired service.
     *
     * @return \App\Controller\Order\OrderListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Order'.\DIRECTORY_SEPARATOR.'OrderListController.php';

        $container->services['App\\Controller\\Order\\OrderListController'] = $instance = new \App\Controller\Order\OrderListController();

        $instance->setContainer(($container->privates['.service_locator._1ZY2NG'] ?? $container->load('get_ServiceLocator_1ZY2NGService'))->withContext('App\\Controller\\Order\\OrderListController', $container));

        return $instance;
    }
}
