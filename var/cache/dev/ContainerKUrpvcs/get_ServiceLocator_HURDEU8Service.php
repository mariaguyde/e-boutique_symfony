<?php

namespace ContainerKUrpvcs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HURDEU8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HURDEU8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HURDEU8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ProductRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
        ], [
            'ProductRepository' => 'App\\Repository\\ProductRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
        ]);
    }
}
