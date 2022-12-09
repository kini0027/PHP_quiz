<html>
<body>
円の面積を求めます!<br>
<form action="calc.php" method="get">
半径=<input type="text" name="hankei">
<input type="submit">
</form>
<?php
$r=$_GET['hankei'];
echo"面積は";
echo $r*$r*3.14;
echo "です";
?>
</body>
</html>
