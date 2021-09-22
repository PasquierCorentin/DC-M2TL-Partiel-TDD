<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Exercice2Test extends TestCase
{
    public function testRomanSimple() : void
    {
        $this->assertEquals('I', Exercice2::decimalToRoman(1));
        $this->assertEquals('II', Exercice2::decimalToRoman(2));
        $this->assertEquals('III', Exercice2::decimalToRoman(3));
        $this->assertEquals('IV', Exercice2::decimalToRoman(4));
        $this->assertEquals('V', Exercice2::decimalToRoman(5));
    }

}
