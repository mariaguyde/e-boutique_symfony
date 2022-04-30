<?php

namespace ContainerKUrpvcs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OhuPNguService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ohuPNgu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ohuPNgu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'customerAddress' => ['privates', '.errored..service_locator.ohuPNgu.App\\Entity\\CustomerAddress', NULL, 'Cannot autowire service ".service_locator.ohuPNgu": it references class "App\\Entity\\CustomerAddress" but no such service exists.'],
        ], [
            'customerAddress' => 'App\\Entity\\CustomerAddress',
        ]);
    }
}
