<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Exercice2Test extends TestCase
{
    public function testRomanSimple() : void
    {
        $this->assertEquals('I', Exercice2::decimalToRoman(1));
        $this->assertEquals('II', Exercice2::decimalToRoman(2));
        $this->assertEquals('IV', Exercice2::decimalToRoman(4));
        $this->assertEquals('V', Exercice2::decimalToRoman(5));
        $this->assertEquals('IX', Exercice2::decimalToRoman(9));
    }

    public function testRomanComplexes() : void
    {
        $this->assertEquals('XXIV', Exercice2::decimalToRoman(24));
        $this->assertEquals('MMXX', Exercice2::decimalToRoman(2020));
        $this->assertEquals('CL', Exercice2::decimalToRoman(150));
        $this->assertEquals('CCXXVI', Exercice2::decimalToRoman(226));
    }

}
