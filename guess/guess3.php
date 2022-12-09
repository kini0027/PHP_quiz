<html>
<body>
わたしはだーれ<br>
<div><img src="http://kini.nkmr.io/php/guess/who1.PNG" ></div>
<form action="guess3.php" method="get">
<input type="text" name="answer">
<input type="submit">
</form>

<?php
$url = "http://kini.nkmr.io/php/guess/answer1.PNG";
$img = file_get_contents($url);
$enc_img = base64_encode($img);
$imginfo = getimagesize('data:application/octet-stream;base64,' . $enc_img);

if ($_GET["answer"]=='ピカチュウ'){
  echo "〇！正解です。<br>";
  echo '<img src="data:' . $imginfo['mime'] . ';base64,'.$enc_img.'">';
}elseif($_GET["answer"]==''){
  echo " ";
}else{
  echo "✖！ピカチュウです。<br>";
  echo '<img src="data:' . $imginfo['mime'] . ';base64,'.$enc_img.'">';
}
?>
</body>
</html>
