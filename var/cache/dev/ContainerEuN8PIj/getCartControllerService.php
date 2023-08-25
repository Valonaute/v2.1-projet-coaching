<?php

namespace ContainerEuN8PIj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CartController' shared autowired service.
     *
     * @return \App\Controller\CartController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CartController.php';

        $container->services['App\\Controller\\CartController'] = $instance = new \App\Controller\CartController(($container->privates['App\\Cart\\CartService'] ?? $container->load('getCartServiceService')), ($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));

        $instance->setContainer(($container->privates['.service_locator.CpcYfID'] ?? $container->load('get_ServiceLocator_CpcYfIDService'))->withContext('App\\Controller\\CartController', $container));

        return $instance;
    }
}
