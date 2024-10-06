<?php
/*
     Factorial (n) = n * (n-1) * (n-2) .... 1
     Loop
     Recursion
     $i++ = $i=($i+1)
     ++$i = $i = ($i+1)
     $i-- = $i=($i-1)
     --$i = $i = ($i-1)
*/
function factorial($n){
    if($n <= 0)return false;
    if($n == 1)return 1;
    return $n * factorial($n-1);
    /* $result=1;
    for ($i=1; $i <= $n; $i++) { 
        $result *= $i; //$result=$result * $i
    }
    return $result; */
}
function calculateSquare($number=1){
    return $number * $number;
}
// echo calculateSquare();
function getTitle($page){
    if($page== "/"){
        return "Home";
    }
    else{
        return "Activity";
    }

}



// ec ho $i;
// echo "\n";
// echo getTitle("/");
// echo "\n";
// echo $i;
// echo "\'  \"  \tsdkalfjdslaf \n dsfjkldjsaklf \r dfdsafdsaf";
// echo "Factorial of 5 = " . factorial(5);
// echo "\nFactorial of -5 = " . (factorial(-5) ?"true":"false");