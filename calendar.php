<html>
<body>
<?php
$i = 1;
$j = 2000;
while($i<13){
  echo $j,"年",$i,"月<br>";
  $i++;
  if($i==13){
    $i=1;
    $j=$j+1;
  }
  if($j>2012){
    $i=14;
  }
}
?>
</body>
</html>
