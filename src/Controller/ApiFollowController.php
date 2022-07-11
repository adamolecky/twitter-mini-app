<?php

/**TODO: all validation in controller should be moved to separate validators for each EP. */

namespace App\Controller;

use App\Entity\User;
use App\Enum\UserType;
use App\Repository\UserRepository;
use App\Service\FollowReader;
use App\Service\FollowWriter;
use App\Service\UserReader;
use App\Service\UserWriter;
use App\UserDto;
use PHP_CodeSniffer\Reports\Json;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('api/follow')]
class ApiFollowController extends AbstractController
{
    public function __construct(
        private FollowReader $followReader,
        private FollowWriter $followWriter
    )
    {
    }
    #[Route(path: '/{id}', name: 'api_follow_user', methods: ['GET'])]
    public function new(string $id): Response
    {

        try {
            $this->denyAccessUnlessGranted(UserType::ROLE_USER);
            $loggedUser = $this->getUser();
        } catch (\Exception $exception) {
            return new JsonResponse(['error' => 'You need to be logged first...']);
        }

        $followTo = Uuid::fromString($id);
        //Does log user follow user with uuid yet?
        try {
            $isFollowing = $this->followReader->isFollowing($loggedUser->getId(), $followTo);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()]);
        }
        if ($isFollowing) {
            return new JsonResponse(['error' => 'Already following this one :)']);
        }

        try {
            $this->followWriter->save($loggedUser->getId(), $followTo);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()]);
        }

        return new JsonResponse(['status' => 'success']);
    }



}
