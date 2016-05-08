<?php

/**
 * Created by PhpStorm.
 * User: pro4540
 * Date: 08.05.2016
 * Time: 20:52
 */
// for( [<инициализация переменных цикла>]; <условие цикла>; [<модификация переменных цикла>]){
// <тело уикла>
// }

$numbers_array = [1, 5, 7, 33, 22, 11, 32, 46, 77, 53, 13, 17, 87];

for($y = count($numbers_array)-1; $y > 0; $y--){
    echo d_a($numbers_array);
    echo "\n";

    $isSorted = false;
    for ($i = 0, $l = count($numbers_array) - 1; $i < $l; $i++) {
        //    echo $numbers_array[$i] . " - " . $numbers_array[$i + 1] . "\n";
        if($numbers_array[$i] < $numbers_array[$i+1]){
            $k = $numbers_array[$i];
            $numbers_array[$i] = $numbers_array[$i+1];
            $numbers_array[$i+1] = $k;
            $isSorted = true;
        }
    }
    if(!$isSorted) break;
}

echo "\n";
echo "\n";

echo d_a($numbers_array);



function d_a($ar){
    $i = 0;
    $l = count($ar);
    $res = '';
    while($i < $l){
        $res .= ($ar[$i] < 10 ? " " : '') . (string) $ar[$i] . ' ';
        $i++;
    }
    return $res;
}
/*for($i=len($numbers_array)-1; $i<0 ;$i--){

