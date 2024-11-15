<?php


namespace App\Controller;

use App\Model\Circle;
use App\Model\Triangle;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GeometryController
{
    #[Route('/circle/{radius}', name: 'circle', methods: ['GET'])]
    public function getCircle(float $radius): JsonResponse
    {
        $circle = new Circle($radius);
        return new JsonResponse([
            'type' => 'circle',
            'radius' => $circle->getRadius(),
            'surface' => $circle->calculateSurface(),
            'diameter' => $circle->calculateDiameter(),
        ]);
    }

    #[Route('/triangle/{a}/{b}/{c}', name: 'triangle', methods: ['GET'])]
    public function getTriangle(float $a, float $b, float $c): JsonResponse
    {
        $triangle = new Triangle($a, $b, $c);
        return new JsonResponse([
            'type' => 'triangle',
            'sides' => $triangle->getSides(),
            'surface' => $triangle->calculateSurface(),
            'circumference' => $triangle->calculateDiameter(),
        ]);
    }
}
