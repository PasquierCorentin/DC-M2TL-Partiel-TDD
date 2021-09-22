<?php declare(strict_types=1);

class Exercice2
{
    public static function decimalToRoman(int $n) 
    {

        $resultat = '';

        if($n === 1){
            $resultat .= 'I';
            return $resultat;
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

        if($n>5){
            $resultat .= 'V';
            $n -= 5;

            if($n === 1){
                $resultat .= 'I';
                return $resultat;
            }
    
            if($n === 2){
                $resultat .= 'II';
                return $resultat;
            }
    
            if($n === 3){
                $resultat .= 'III';
                return $resultat;
            }
    
            if($n === 4){
                $resultat .= 'IV';
                return $resultat;
            }

            return $resultat;
        }
    }
}

