<?php

namespace ContainerTUeG6t9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZOQ9v2dService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZOQ9v2d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZOQ9v2d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'context' => ['privates', '.errored..service_locator.ZOQ9v2d.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.ZOQ9v2d": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }
}
