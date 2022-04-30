<?php

namespace ContainerHdrtMyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YQV8pxlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YQV8pxl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YQV8pxl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'product' => ['privates', '.errored..service_locator.YQV8pxl.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.YQV8pxl": it references class "App\\Entity\\Product" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'product' => 'App\\Entity\\Product',
        ]);
    }
}
