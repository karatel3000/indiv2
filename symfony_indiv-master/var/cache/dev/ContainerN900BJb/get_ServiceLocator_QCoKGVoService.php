<?php

namespace ContainerN900BJb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QCoKGVoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QCoKGVo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QCoKGVo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'City' => ['privates', '.errored..service_locator.QCoKGVo.App\\Entity\\City', NULL, 'Cannot autowire service ".service_locator.QCoKGVo": it references class "App\\Entity\\City" but no such service exists.'],
        ], [
            'City' => 'App\\Entity\\City',
        ]);
    }
}
