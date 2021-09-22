<?php declare(strict_types=1);

class Exercice2
{
    public static function decimalToRoman(int $n) 
    {
        if($n === 1){
            return 'I';
        }

        if($n === 2){
            return 'II';
        }

        if($n === 3){
            return 'III';
        }

        if($n === 4){
            return 'IV';
        }

        if($n === 5){
            return 'V';
        }
    }
}

