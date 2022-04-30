<?php

namespace ContainerKUrpvcs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LruWq6uService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LruWq6u' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LruWq6u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.LruWq6u.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.LruWq6u": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
