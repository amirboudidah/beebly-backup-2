<?php

namespace Container9yvJtlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A0FyExService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._A0FyEx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._A0FyEx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'sujet' => ['privates', '.errored..service_locator._A0FyEx.App\\Entity\\Sujet', NULL, 'Cannot autowire service ".service_locator._A0FyEx": it references class "App\\Entity\\Sujet" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'sujet' => 'App\\Entity\\Sujet',
        ]);
    }
}
