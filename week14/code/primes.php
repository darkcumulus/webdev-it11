<?php

$nums = range(0, 100, 1);

foreach ($nums as $n) {
    
    if ($n <= 1) continue;
    
    if ($n == 2 or $n == 3) {
        
        echo "$n ";
        continue;
    }
    
    $i = (int) sqrt($n);
    $isPrime = true;
    
    while ($i > 1) { 
        
        if ($n % $i == 0) {
            
            $isPrime = False;
        } 
        
        $i--;
    }

    if ($isPrime == True) {
         echo "$n ";
    }
}

echo "\n";  