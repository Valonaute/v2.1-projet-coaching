<?php

namespace Container4xxvXrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartConfirmationTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CartConfirmationType' shared autowired service.
     *
     * @return \App\Form\CartConfirmationType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CartConfirmationType'] = new \App\Form\CartConfirmationType();
    }
}
