<?php

namespace ContainerIzmCac3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsuarioController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UsuarioController' shared autowired service.
     *
     * @return \App\Controller\UsuarioController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UsuarioController.php';

        $container->services['App\\Controller\\UsuarioController'] = $instance = new \App\Controller\UsuarioController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\UsuarioController', $container));

        return $instance;
    }
}