<?php
for($i = 2;$i <=10000;$i++) {
  if (prime($i)) {
  echo $i,"\n";
  }
}
function prime($n) {
  if ($n == 2){
  return true;
}
if (($n % 2) == 0){
   return false;
  }
for($i= 3;$i < $n; $i += 2) {
  if (($n % $i) == 0)
  return false;
 }
 return true;
}
?>
