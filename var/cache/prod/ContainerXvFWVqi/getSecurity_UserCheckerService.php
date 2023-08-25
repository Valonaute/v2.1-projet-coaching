<?php

namespace ContainerXvFWVqi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_UserCheckerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\InMemoryUserChecker();
    }
}
