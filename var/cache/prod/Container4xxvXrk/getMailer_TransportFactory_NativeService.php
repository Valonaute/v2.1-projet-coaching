<?php

namespace Container4xxvXrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_NativeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'mailer.transport_factory.native' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NativeTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['mailer.transport_factory.native'])) {
            return $container->privates['mailer.transport_factory.native'];
        }

        return $container->privates['mailer.transport_factory.native'] = new \Symfony\Component\Mailer\Transport\NativeTransportFactory($a, NULL, ($container->privates['logger'] ?? self::getLoggerService($container)));
    }
}
