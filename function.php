<?php
function pertambahan($a, $b){
  $hasil = $a + $b;
  return $hasil;
}

function tampilKata(){
  $kata = 'Hallo Dunia';
  return $kata;
}

function loop($counter){
  $kata = 'Hallo Dunia'. "<br>";
  for ($i=0; $i <= $counter; $i++) {
    echo $kata;
  }
}

echo pertambahan(10, 20);
echo tampilKata();
loop(10);
 ?>
