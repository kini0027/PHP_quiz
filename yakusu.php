<html>
<body>
約数を表示します。数字を入力してください<br>
<form action="yakusu.php" method="get">
約数=<input type="text" name="yakusu">
<input type="submit">
</form>
<?php
$number=$_GET["yakusu"];
$j = 1;
while($j<$number){
  if($number%$j==0){
    echo $j,"は",$number,"の約数です。";
  }
  $j++;
}
?>
</body>
</html>
