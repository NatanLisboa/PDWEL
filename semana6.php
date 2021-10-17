<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Atividade - Semana 6</title>
    </head>
    <body>  
        <?php
            // 1.
            // a)
            $userNumber = 10;
            function factorial($number){
                $factorial = 1;
                $i = $number;
                while ($i > 1){
                    $factorial *= $i;
                    $i--;
                }
                return $factorial;
            }
            echo "1. a) $userNumber! = " . factorial($userNumber);

            //1.
            //b)
            echo '<br>';
            $userNumber = 1;
            function isPrimeNumber($number){
                
                $divider = 1;

                do{
                } while ((++$divider < $number) && ($number % $divider != 0));
                
                if($divider == $number){
                    return true;
                }

                return false;

            }

            echo "1. b) $userNumber ";
            if (!isPrimeNumber($userNumber)){
                echo "NÃO ";
            }
            echo "é primo!";

            //1.
            //c)
            echo '<br>';
            $userNumber = 28;
            function isPerfectNumber($number){
                
                $dividers = getDividers($number);
                $sum = 0;

                foreach ($dividers as $divider){
                    $sum += $divider;
                }

                if ($sum == $number){
                    return true;
                }

                return false;

            }
            
            function getDividers($number){
                
                $dividers = array(1);

                for ($divider = 2; $divider <= $number / 2; $divider++){
                    if ($number % $divider == 0) {
                        array_push($dividers, $divider);
                    }
                }

                return $dividers;

            }

            echo "1. c) $userNumber ";
            if (!isPerfectNumber($userNumber)){
                echo "NÃO ";
            }
            echo "é perfeito!";
            
            //2.
            //a)
            echo '<br>';
            $n = 10;
            $factorials = [];
            for ($i = 0; $i < $n; $i++){
                array_push($factorials, factorial($i));
            }
            echo "2. a) <br>";
            foreach ($factorials as $key => $value){
                echo $key . "! = $value <br>" ;
            }

            //2.
            //b)
            echo '<br>';
            
            $n = 11;
            $primeNumbers = [];
            $primesFound = 0;
            $number = 0;

            while ($primesFound < $n){
                if (isPrimeNumber($number)){
                    array_push($primeNumbers, $number);
                    $primesFound++;
                }
                $number++;
            }

            echo "2. b) ";
            foreach ($primeNumbers as $primeNumber){
                echo "$primeNumber ";
            }

            //2.
            //c)
            echo '<br>';
            
            $n = 3;
            $perfectNumbers = [];
            $perfectNumbersFound = 0;
            $number = 0;
            
            while ($perfectNumbersFound < $n){
                if (isPerfectNumber($number)){
                    array_push($perfectNumbers, $number);
                    $perfectNumbersFound++;
                }
                $number++;
            }

            echo "2. c) ";
            foreach ($perfectNumbers as $perfectNumber){
                echo "$perfectNumber ";
            }

        ?>
    </body>
</html>