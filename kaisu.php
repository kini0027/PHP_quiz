<html>
<body>
回数を入力してください<br>
<form action="kaisu.php" method="get">
回数=<input type="text" name="kaisu">
<input type="submit">
</form>
<?php
$value=$_GET["kaisu"];
$i = 0;
$total = 0;
while($i<$value){
  $total=$total+$i;
  $i++;
}
  echo $total;
?>
</body>
</html>
