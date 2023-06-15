<?php

function findLargest($num1, $num2, $num3){
    return max($num1, $num2, $num3);
}

if(isset($argv[1]) && isset($argv[2]) && isset($argv[3])){
    $num1 = (int)$argv[1];
    $num2 = (int)$argv[2];
    $num3 = (int)$argv[3];

    $largest = findLargest($num1, $num2, $num3);
    echo "The largest is: " . $largest;
}
else{
    echo "Please enter command line arguments";
}


?>