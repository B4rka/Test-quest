<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        //Arrange
        $firstValue = 3;
        $secondValue = 4;
        $expectedResult = 12;

        //Act
        $calculator = new Calculator();
        $product = $calculator->multiplication($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $product, 
            "La méthode multiplication() ne fonctionne plus :-("
        );
    }

    public function testIsEven(): void
    {
        //Arrange
        $firstValue = 4;

        //Act
        $calculator = new Calculator();
        $isEven = $calculator->isEven($firstValue);
        
        //Assert
        $this->assertTrue($isEven, 
            "La méthode isEven() ne fonctionne plus :-("
        );
    }
}
