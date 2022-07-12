<?php

$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];
//var_dump($data);

for ($i = 0; $i < sizeof($data); $i++){
  if ($data[$i] % 5 == 0 && $data[$i] % 11 == 0){
    echo "FizzBuzz\n";
  } elseif ($data[$i] % 5 == 0){
    echo "Fizz\n";
  } elseif ($data[$i] % 11 == 0){
    echo "Buzz\n";
  }else {
    echo $data[$i]."\n";
  }
}