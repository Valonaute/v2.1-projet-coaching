<?php

namespace Container4xxvXrk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W_UrhbLService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.w.urhbL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.w.urhbL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
        ]);
    }
}
