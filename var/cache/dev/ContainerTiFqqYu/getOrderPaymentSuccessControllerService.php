<?php

namespace ContainerTiFqqYu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderPaymentSuccessControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Order\OrderPaymentSuccessController' shared autowired service.
     *
     * @return \App\Controller\Order\OrderPaymentSuccessController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Order'.\DIRECTORY_SEPARATOR.'OrderPaymentSuccessController.php';

        $container->services['App\\Controller\\Order\\OrderPaymentSuccessController'] = $instance = new \App\Controller\Order\OrderPaymentSuccessController();

        $instance->setContainer(($container->privates['.service_locator._1ZY2NG'] ?? $container->load('get_ServiceLocator_1ZY2NGService'))->withContext('App\\Controller\\Order\\OrderPaymentSuccessController', $container));

        return $instance;
    }
}
