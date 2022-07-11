<?php

namespace ContainerYcmBkVP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiUserController' shared autowired service.
     *
     * @return \App\Controller\ApiUserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ApiUserController.php';

        $container->services['App\\Controller\\ApiUserController'] = $instance = new \App\Controller\ApiUserController(($container->privates['App\\Service\\UserReader'] ?? $container->load('getUserReaderService')), ($container->privates['App\\Service\\UserWriter'] ?? $container->load('getUserWriterService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ApiUserController', $container));

        return $instance;
    }
}
