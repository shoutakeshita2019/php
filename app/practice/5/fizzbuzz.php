<?php

$i = 1;
while($i <= 100){
    if($i % 3 === 0 && $i % 5 === 0){
        echo 'FIZZBUZZ<br>';
    }elseif($i % 5 === 0){
        echo 'BUZZ<br>';
    }elseif($i % 3 === 0){
        echo 'FIZZ<br>';
    }else {
    echo $i.'<br>';}
        $i++;
}