<?php

namespace App\EventListener;

use App\Entity\Follow;
use App\Entity\User;
use App\Service\FollowReader;
use App\Service\UserWriter;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class FollowUpdatedListener implements EventSubscriberInterface
{
    public function __construct(
        private FollowReader $followReader,
        private UserWriter $userWriter
    )
    {
    }

    public function postUpdate(LifecycleEventArgs $event): void
    {
        $this->updateFollowCount($event);
    }

    public function postRemove(LifecycleEventArgs $event): void
    {
        $this->updateFollowCount($event);
    }

    public function postPersist(LifecycleEventArgs $event): void
    {

        $this->updateFollowCount($event);
    }

    public function getSubscribedEvents(): array
    {
        return [
            Events::postPersist,
            Events::postRemove,
            Events::postUpdate,
        ];
    }

    /**
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    private function updateFollowCount(LifecycleEventArgs $event): void
    {
        $follow = $event->getObject();

        if (!$follow instanceof Follow) {
            return;
        }

        $user = $follow->getUserTo();
        $count = $this->followReader->getCountRecords($user->getId());
        $user->setCountFollowers($count);
        $this->userWriter->save($user);
    }
}