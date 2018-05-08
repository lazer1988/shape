<?php

namespace Tests\App\Shape;

use PHPUnit\Framework\TestCase;
use Tests\Mock\TestOutput;
use App\Factory\ShapeFactory;

/**
 * Class ShapeTest
 *
 * @package Tests\App\Shape
 */
class ShapeTest extends TestCase
{
    /**
     * @throws \App\Exception\ShapeException
     */
    public function testSquare()
    {
        $square = <<<Text
**********
**********
**********
**********
**********
**********
**********
**********
**********
**********

Text;


        $output = new TestOutput();

        $shape = ShapeFactory::create('square');
        $shape
            ->setOutput($output)
            ->setWidth(10)
            ->setHeight(10)
        ;

        $shape->display();

        $this->assertEquals($output->output, $square);
    }

    /**
     * @throws \App\Exception\ShapeException
     */
    public function testTriangle()
    {
        $square = <<<Text
         *         
        ***        
       *****       
      *******      
     *********     
    ***********    
   *************   
  ***************  
 ***************** 
*******************

Text;

        $output = new TestOutput();

        $shape = ShapeFactory::create('triangle');
        $shape
            ->setOutput($output)
            ->setHeight(10)
        ;

        $shape->display();

        $this->assertEquals($output->output, $square);
    }

    /**
     * @throws \App\Exception\ShapeException
     */
    public function testRhomb()
    {
        $square = <<<Text
         *         
        ***        
       *****       
      *******      
     *********     
    ***********    
   *************   
  ***************  
 ***************** 
*******************
 ***************** 
  ***************  
   *************   
    ***********    
     *********     
      *******      
       *****       
        ***        
         *         

Text;

        $output = new TestOutput();

        $shape = ShapeFactory::create('rhomb');
        $shape
            ->setOutput($output)
            ->setHeight(10)
        ;

        $shape->display();

        $this->assertEquals($output->output, $square);
    }
}
