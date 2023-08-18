<?php

namespace ContainerB2mut6X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminSecurityControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdminSecurityController' shared autowired service.
     *
     * @return \App\Controller\AdminSecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AdminSecurityController.php';

        $container->services['App\\Controller\\AdminSecurityController'] = $instance = new \App\Controller\AdminSecurityController(($container->privates['App\\Repository\\OrderRepository'] ?? $container->load('getOrderRepositoryService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\ReviewRepository'] ?? $container->load('getReviewRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.o6bgBvu'] ?? $container->load('get_ServiceLocator_O6bgBvuService'))->withContext('App\\Controller\\AdminSecurityController', $container));

        return $instance;
    }
}
