<?php



namespace App\Service;

use App\Model\Circle;
use App\Model\Triangle;

class GeometryCalculator
{
    public function sumAreas(object $shape1, object $shape2): float
    {
        return $shape1->calculateSurface() + $shape2->calculateSurface();
    }

    public function sumDiameters(object $shape1, object $shape2): float
    {
        return $shape1->calculateDiameter() + $shape2->calculateDiameter();
    }
}
