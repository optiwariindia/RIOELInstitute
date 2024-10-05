<?php

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