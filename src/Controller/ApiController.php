<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api/collection', name: 'api_collection', methods: 'GET')]
    public function getCollection(LoggerInterface $logger): JsonResponse
    {
        $logger->error('This is an error.');
        $data = [
            'foo' => 'bar',
            'baz' => 'qux',
        ];
        return $this->json($data);
    }

    #[Route('/api/single/{id<\d+>}', name: 'api_single', methods: 'GET')]
    public function getSingle(int $id)
    {
        dd($id);
    }
}
