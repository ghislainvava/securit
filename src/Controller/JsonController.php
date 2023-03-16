<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class JsonController extends AbstractController
{
    /**
     * @Route("/json", name="json")
     */
    public function index(): JsonResponse
    {
        $data = [
            'message' => 'Hello, World!',
            'timestamp' => time(),
        ];

        return $this->json($data);
    }
}
