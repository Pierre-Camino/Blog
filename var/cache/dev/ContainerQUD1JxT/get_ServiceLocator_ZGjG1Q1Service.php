<?php

namespace ContainerQUD1JxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZGjG1Q1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZGjG1Q1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZGjG1Q1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.ZGjG1Q1.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.ZGjG1Q1": it references class "App\\Entity\\Article" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'article' => 'App\\Entity\\Article',
            'manager' => '?',
        ]);
    }
}
