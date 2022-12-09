<!DOCTYPE html>
 <html>
   <head>
     <title> </title>
     <link rel="stylesheet" href="quiz.css">
     <link rel="stylesheet" href="button.css">
   </head>
<body>
<div class="jungle">
<a class="btn_b" href="http://kini.nkmr.io/php/SQL/jungle.php">ジャンル別</a>&nbsp&nbsp&nbsp&nbsp
<a  class="btn_b" href="http://kini.nkmr.io/php/SQL/quiz.php">評価高い順</a>&nbsp&nbsp&nbsp&nbsp
<a  class="btn_b" href="http://kini.nkmr.io/php/SQL/comment.php">正答数低い順</a> &nbsp&nbsp&nbsp
<a class="btn_b" href="http://kini.nkmr.io/php/SQL/quiz.php">その他</a></div>
<br>
<?php
$mysqli = new mysqli("localhost","nakamura-lab","n1k2m3r4fms");
$mysqli->select_db("komatsubara_db");
$sql="INSERT INTO question_table (ID, num_q, rank_num, date, rank_date,ans,genre,sent) ;";
$results=$mysqli->query($sql);
$results=$mysqli->query("select ID, num_q, rank_num, date, rank_date,ans,genre,sent from question_table");
echo "<table>";
echo "&nbsp&nbsp&nbsp&nbsp高評価数&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp問題番号&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp答え数&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspジャンル&nbsp&nbsp&nbsp&nbsp問題内容";
while($line = $results->fetch_array(MYSQLI_BOTH)){
    echo "<tr><td>";
    echo $line["rank_num"];
    echo "</td><td>";
    echo $line["num_q"];
    echo "</td><td>";
    echo $line["ans"];
    echo "</td><td>";
    echo $line["genre"];
    echo "</td><td>";
    echo $line["sent"];
    echo "</td></tr>";
}
echo "</table>";
$mysqli->close();
?>
   </body>
 </html>

