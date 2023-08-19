<?php

namespace ContainerCEphORZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_Renderer_EsiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'AbstractSurrogateFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Fragment'.\DIRECTORY_SEPARATOR.'EsiFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'UriSigner.php';

        $a = ($container->privates['fragment.renderer.inline'] ?? $container->load('getFragment_Renderer_InlineService'));

        if (isset($container->privates['fragment.renderer.esi'])) {
            return $container->privates['fragment.renderer.esi'];
        }

        $container->privates['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(($container->privates['esi'] ??= new \Symfony\Component\HttpKernel\HttpCache\Esi()), $a, ($container->privates['uri_signer'] ??= new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET'))));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }
}
