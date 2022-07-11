<?php

namespace App\Controller;


use PHP_CodeSniffer\Reports\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class SecurityController extends AbstractController
{

    #[Route('/api/login', name: 'api_user_login')]
    public function loginAction(Request $request)
    {
        return new JsonResponse(['status' => "Great, now you are logged in!"], 200);
    }
}