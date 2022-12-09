<html>
<body>
台形の面積を求めます<br>
<form action="uranai2.php" method="get">
くじ=<input type="text" name="kuji">
<input type="submit">
</form>
<?php
$number=$_GET["kuji"];
if($number==1){
echo"大吉です";
}elseif($number==2){
echo"中吉です";
}else{
echo"凶です";
}
?>
</body>
</html>
