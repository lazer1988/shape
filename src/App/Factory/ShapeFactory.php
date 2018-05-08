<?php

namespace App\Factory;

use App\Exception\ShapeException;
use App\Shape\AbstractShape;
use App\Shape\Triangle;
use App\Shape\Square;
use App\Shape\Rhomb;

/**
 * Class ShapeFactory
 *
 * @package App\Factory
 */
class ShapeFactory
{
    /**
     * @param string $type
     *
     * @return AbstractShape
     * @throws ShapeException
     */
    public static function create(string $type): AbstractShape
    {
        switch ($type) {
            case 'triangle':
                return new Triangle();
            case 'square':
                return new Square();
            case 'rhomb':
                return new Rhomb();
        }

        throw new ShapeException('undefined shape type');
    }
}
