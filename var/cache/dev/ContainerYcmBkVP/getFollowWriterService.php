<?php

namespace ContainerYcmBkVP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFollowWriterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\FollowWriter' shared autowired service.
     *
     * @return \App\Service\FollowWriter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/UserRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Service/FollowWriter.php';

        return $container->privates['App\\Service\\FollowWriter'] = new \App\Service\FollowWriter(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['App\\Service\\UserReader'] ?? $container->load('getUserReaderService')));
    }
}
