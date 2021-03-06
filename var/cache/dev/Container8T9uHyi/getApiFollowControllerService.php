<?php

namespace Container8T9uHyi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiFollowControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiFollowController' shared autowired service.
     *
     * @return \App\Controller\ApiFollowController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ApiFollowController.php';

        $container->services['App\\Controller\\ApiFollowController'] = $instance = new \App\Controller\ApiFollowController(($container->privates['App\\Service\\FollowReader'] ?? $container->load('getFollowReaderService')), ($container->privates['App\\Service\\FollowWriter'] ?? $container->load('getFollowWriterService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ApiFollowController', $container));

        return $instance;
    }
}
