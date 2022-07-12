<?php

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for ($i = 0; $i < sizeof($data); $i++){
  //echo gettype($data[$i])."\n";
  if ($data[$i] <= 0) {
    echo "index ke ".$i." tidak bisa divalidasi sistem\n";
  } else {
    echo "index ke ".$i." adalah ".gettype($data[$i])." dengan data ".$data[$i]."\n";
  }
}