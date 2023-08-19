<?php

namespace ContainerCEphORZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCookieConsentTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ConnectHolland\CookieConsentBundle\Form\CookieConsentType' shared autowired service.
     *
     * @return \ConnectHolland\CookieConsentBundle\Form\CookieConsentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'connectholland'.\DIRECTORY_SEPARATOR.'cookie-consent-bundle'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'CookieConsentType.php';

        return $container->privates['ConnectHolland\\CookieConsentBundle\\Form\\CookieConsentType'] = new \ConnectHolland\CookieConsentBundle\Form\CookieConsentType(($container->privates['ConnectHolland\\CookieConsentBundle\\Cookie\\CookieChecker'] ?? $container->load('getCookieCheckerService')), $container->parameters['ch_cookie_consent.categories'], false, true);
    }
}
