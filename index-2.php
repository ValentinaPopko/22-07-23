<?php

$arr = array( 
 array( 
  array(11, 12, 13), 
  array(14, 15, 16), 
  array(17, 17, 19), 
 ), 
 array( 
  array(21, 22, 23), 
  array(24, 25, 26), 
  array(27, 27, 29), 
 ), 
 array( 
  array(31, 32, 33), 
  array(34, 35, 36), 
  array(37, 37, 39), 
 ), 
);

$summa = 0;
foreach ($arr as $i) {
    foreach ($i as $j) {
        foreach ($j as $k) {
            $summa += $k;
        }
    }
}

echo $summa;

?>