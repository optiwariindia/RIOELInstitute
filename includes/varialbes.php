<?php

$integer=32432;
$string= "dsafdsaf dsafdsa fdsf";
$float=1.22324;
$boolean=true; //false

$array=[
    50=>1,
    0=>2,
    "fghffhg"=>[4,5],
    "djdslkfjldksa",
    true
];
$array[0]=3;
echo $integer;
echo "\n";
echo  $string;
echo "\n";
echo  $float;
echo "\n";
echo $boolean == true;
echo "\n";


print_r($array);
echo "\n";
// echo $array[2];