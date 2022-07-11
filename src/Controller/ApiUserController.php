<?php

/**TODO: all validation in controller should be moved to separate validators for each EP. */

namespace App\Controller;

use App\Entity\User;
use App\Enum\UserType;
use App\Repository\UserRepository;
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

#[Route('api/user')]
class ApiUserController extends AbstractController
{
    public function __construct(
        private UserReader $userReader,
        private UserWriter $userWriter
    )
    {
    }
    #[Route(path: '/new', name: 'api_user_create', methods: ['POST'], priority: 100)]
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted(UserType::ROLE_ADMIN);
        try {
            $userDto = new UserDto(json_decode($request->getContent()));
            $this->userWriter->saveFromDto($userDto);

        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 400);
        }
        return new JsonResponse(['status' => 'success'], 200);

    }

    #[Route(path: '/{id}', name: 'api_user_show', methods: ['GET'])]
    public function show(string $id): Response
    {
        $this->denyAccessUnlessGranted(UserType::ROLE_USER);
        try {
            $uuid = Uuid::fromString($id);
            return new JsonResponse($this->userReader->getUser($uuid));
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Not Valid uuid string']);
        }
    }

    #[Route(path: '/{id}', name: 'api_user_delete', methods: ['DELETE'])]
    public function delete(User $user): Response
    {
        $this->denyAccessUnlessGranted(UserType::ROLE_ADMIN);
        try {
            $this->userWriter->delete($user->getId());
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()]);
        }
        return new JsonResponse(['success' => true]);
    }

    #[Route(path: '/list/{page}', name: 'api_user_index', methods: ['GET'])]
    public function index(int $page): Response
    {
        $this->denyAccessUnlessGranted(UserType::ROLE_USER);
        $users = $this->userReader->getPagedUsersAsCollection($page);
        return new JsonResponse($users->toArray());
    }

}
