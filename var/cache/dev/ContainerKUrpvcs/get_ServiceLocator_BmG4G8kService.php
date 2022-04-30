<?php

namespace ContainerKUrpvcs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BmG4G8kService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bmG4G8k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bmG4G8k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.bmG4G8k.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.bmG4G8k": it references class "App\\Entity\\Category" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'category' => 'App\\Entity\\Category',
            'entityManager' => '?',
        ]);
    }
}
