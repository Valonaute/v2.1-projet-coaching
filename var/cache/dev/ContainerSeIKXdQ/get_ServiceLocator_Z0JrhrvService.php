<?php

namespace ContainerSeIKXdQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z0JrhrvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z0Jrhrv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z0Jrhrv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ArticleController::showArticles' => ['privates', '.service_locator.u8T0ln3', 'get_ServiceLocator_U8T0ln3Service', true],
            'App\\Controller\\ArticleController::showArticlesFront' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController::showOneArticleFront' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\CategoryController::showEbook' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showFormations' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showMotivation' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showRdv' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showStages' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController::showcategoryfront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ContactController::contactForm' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\MailerController::sendEmail' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\Order\\OrderPaymentController::showCard' => ['privates', '.service_locator.ryNM04v', 'get_ServiceLocator_RyNM04vService', true],
            'App\\Controller\\Order\\OrderPaymentSuccessController::success' => ['privates', '.service_locator.tO.KkvL', 'get_ServiceLocator_TO_KkvLService', true],
            'App\\Controller\\ProductController::showOneProductFront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController::showProducts' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController::showProductsFront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\RegisterController::index' => ['privates', '.service_locator.M3Xv59D', 'get_ServiceLocator_M3Xv59DService', true],
            'App\\Controller\\TestStripeController::checkout' => ['privates', '.service_locator.heXyn7h', 'get_ServiceLocator_HeXyn7hService', true],
            'App\\Controller\\TestStripeController::success' => ['privates', '.service_locator.5jb3ufA', 'get_ServiceLocator_5jb3ufAService', true],
            'App\\Controller\\UserSecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ArticleController:showArticles' => ['privates', '.service_locator.u8T0ln3', 'get_ServiceLocator_U8T0ln3Service', true],
            'App\\Controller\\ArticleController:showArticlesFront' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\ArticleController:showOneArticleFront' => ['privates', '.service_locator.b12wXHr', 'get_ServiceLocator_B12wXHrService', true],
            'App\\Controller\\CategoryController:showEbook' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showFormations' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showMotivation' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showRdv' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showStages' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CategoryController:showcategoryfront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ContactController:contactForm' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\MailerController:sendEmail' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\Order\\OrderPaymentController:showCard' => ['privates', '.service_locator.ryNM04v', 'get_ServiceLocator_RyNM04vService', true],
            'App\\Controller\\Order\\OrderPaymentSuccessController:success' => ['privates', '.service_locator.tO.KkvL', 'get_ServiceLocator_TO_KkvLService', true],
            'App\\Controller\\ProductController:showOneProductFront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController:showProducts' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController:showProductsFront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\RegisterController:index' => ['privates', '.service_locator.M3Xv59D', 'get_ServiceLocator_M3Xv59DService', true],
            'App\\Controller\\TestStripeController:checkout' => ['privates', '.service_locator.heXyn7h', 'get_ServiceLocator_HeXyn7hService', true],
            'App\\Controller\\TestStripeController:success' => ['privates', '.service_locator.5jb3ufA', 'get_ServiceLocator_5jb3ufAService', true],
            'App\\Controller\\UserSecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ArticleController::showArticles' => '?',
            'App\\Controller\\ArticleController::showArticlesFront' => '?',
            'App\\Controller\\ArticleController::showOneArticleFront' => '?',
            'App\\Controller\\CategoryController::showEbook' => '?',
            'App\\Controller\\CategoryController::showFormations' => '?',
            'App\\Controller\\CategoryController::showMotivation' => '?',
            'App\\Controller\\CategoryController::showRdv' => '?',
            'App\\Controller\\CategoryController::showStages' => '?',
            'App\\Controller\\CategoryController::showcategoryfront' => '?',
            'App\\Controller\\ContactController::contactForm' => '?',
            'App\\Controller\\MailerController::sendEmail' => '?',
            'App\\Controller\\Order\\OrderPaymentController::showCard' => '?',
            'App\\Controller\\Order\\OrderPaymentSuccessController::success' => '?',
            'App\\Controller\\ProductController::showOneProductFront' => '?',
            'App\\Controller\\ProductController::showProducts' => '?',
            'App\\Controller\\ProductController::showProductsFront' => '?',
            'App\\Controller\\RegisterController::index' => '?',
            'App\\Controller\\TestStripeController::checkout' => '?',
            'App\\Controller\\TestStripeController::success' => '?',
            'App\\Controller\\UserSecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:showArticles' => '?',
            'App\\Controller\\ArticleController:showArticlesFront' => '?',
            'App\\Controller\\ArticleController:showOneArticleFront' => '?',
            'App\\Controller\\CategoryController:showEbook' => '?',
            'App\\Controller\\CategoryController:showFormations' => '?',
            'App\\Controller\\CategoryController:showMotivation' => '?',
            'App\\Controller\\CategoryController:showRdv' => '?',
            'App\\Controller\\CategoryController:showStages' => '?',
            'App\\Controller\\CategoryController:showcategoryfront' => '?',
            'App\\Controller\\ContactController:contactForm' => '?',
            'App\\Controller\\MailerController:sendEmail' => '?',
            'App\\Controller\\Order\\OrderPaymentController:showCard' => '?',
            'App\\Controller\\Order\\OrderPaymentSuccessController:success' => '?',
            'App\\Controller\\ProductController:showOneProductFront' => '?',
            'App\\Controller\\ProductController:showProducts' => '?',
            'App\\Controller\\ProductController:showProductsFront' => '?',
            'App\\Controller\\RegisterController:index' => '?',
            'App\\Controller\\TestStripeController:checkout' => '?',
            'App\\Controller\\TestStripeController:success' => '?',
            'App\\Controller\\UserSecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
