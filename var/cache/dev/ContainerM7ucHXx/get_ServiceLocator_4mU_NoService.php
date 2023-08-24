<?php

namespace ContainerM7ucHXx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4mU_NoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4m_U.no' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4m_U.no'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
        ]);
    }
}
