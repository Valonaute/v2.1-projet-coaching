<?php

namespace Container4xxvXrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\RegisterController' shared autowired service.
     *
     * @return \App\Controller\RegisterController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RegisterController'] = $instance = new \App\Controller\RegisterController();

        $instance->setContainer(($container->privates['.service_locator.xnUJFu9'] ?? $container->load('get_ServiceLocator_XnUJFu9Service'))->withContext('App\\Controller\\RegisterController', $container));

        return $instance;
    }
}