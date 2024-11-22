<?php
$arrayNum  = [-10, 20, -100, 40, -5.3, 1.7, -21.35, 17.19];
$count = count($arrayNum);
sort($arrayNum); // tang dan
rsort($arrayNum);// giam dan

usort($arrayNum, function($a, $b) {
    return $b <=> $a; 
});
print_r($arr); 


function bubbleSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}


$arr = [5, 3, 8, 1, 2];
$sortedArr = bubbleSort($arr);
print_r($sortedArr); 

 