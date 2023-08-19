<?php

namespace Container5uxq7Bv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCookieConsentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'ConnectHolland\CookieConsentBundle\Controller\CookieConsentController' shared autowired service.
     *
     * @return \ConnectHolland\CookieConsentBundle\Controller\CookieConsentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'connectholland'.\DIRECTORY_SEPARATOR.'cookie-consent-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CookieConsentController.php';

        return $container->services['ConnectHolland\\CookieConsentBundle\\Controller\\CookieConsentController'] = new \ConnectHolland\CookieConsentBundle\Controller\CookieConsentController(($container->privates['twig'] ?? self::getTwigService($container)), ($container->privates['form.factory'] ?? self::getForm_FactoryService($container)), ($container->privates['ConnectHolland\\CookieConsentBundle\\Cookie\\CookieChecker'] ?? $container->load('getCookieCheckerService')), ($container->services['router'] ?? self::getRouterService($container)), 'light', 'top', ($container->services['translator'] ?? self::getTranslatorService($container)), false, NULL);
    }
}
