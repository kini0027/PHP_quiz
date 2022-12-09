<html>
<body>
台形の面積を求めます<br>
<from action="calc.php" method="get">
上底=<input type="text" name="top">
下底=<input type="text" name="bottom">
高さ=<input type="text" name="height">
<input type="submit">
</form>
<?php
$a=$_GET['top'];
$b=$_GET['bottom'];
$h=$_GET['height'];
echo"面積は";
echo ($a+$b)*$h/2;
echo "です";
?>
</body>
</html>
