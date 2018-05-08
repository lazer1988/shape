<?php

namespace Tests\App\Factory;

use PHPUnit\Framework\TestCase;
use App\Exception\ShapeException;
use App\Factory\ShapeFactory;
use App\Shape\Square;
use App\Shape\Triangle;
use App\Shape\Rhomb;

/**
 * Class ShapeFactoryTest
 *
 * @package Tests\App\Factory
 */
class ShapeFactoryTest extends TestCase
{
    /**
     * @throws ShapeException
     */
    public function testCreate()
    {
        $this->assertInstanceOf(Square::class, ShapeFactory::create('square'));
        $this->assertInstanceOf(Triangle::class, ShapeFactory::create('triangle'));
        $this->assertInstanceOf(Rhomb::class, ShapeFactory::create('rhomb'));
    }

    /**
     * @throws ShapeException
     */
    public function testException()
    {
        $this->expectException(ShapeException::class);

        ShapeFactory::create('blabla');
    }
}
