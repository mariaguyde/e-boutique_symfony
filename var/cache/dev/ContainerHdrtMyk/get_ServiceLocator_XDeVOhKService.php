<?php

namespace ContainerHdrtMyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XDeVOhKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XDeVOhK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XDeVOhK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commandLine' => ['privates', '.errored..service_locator.XDeVOhK.App\\Entity\\CommandLine', NULL, 'Cannot autowire service ".service_locator.XDeVOhK": it references class "App\\Entity\\CommandLine" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'commandLine' => 'App\\Entity\\CommandLine',
            'entityManager' => '?',
        ]);
    }
}
