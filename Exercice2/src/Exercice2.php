<?php declare(strict_types=1);

class Exercice2
{
    public static function decimalToRoman(int $n) 
    {

        $resultat = '';

        $basesDec = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
        $basesRom = ['M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'];

        $decimBigBase = $basesDec[0];
        $romanBigBase = $basesRom[0];

        while ($n != 0){
                
            for($i = 0; $n <= $basesDec[$i]; $i++){
                $decimBigBase = $basesDec[$i];
                $romanBigBase = $basesRom[$i];
            }

            if($n===$romanBigBase){
                $resultat .= $romanBigBase;
                return $resultat;
            } else {
                $quotient = intdiv($n, $decimBigBase);
            
                for ($i = 0; $i < $quotient; $i++ ){
                    $resultat .= $romanBigBase;
                }

                $reste = $n % $decimBigBase;

                $n = $reste;
            }
        }

        return $resultat;

    }
}

