<body>
<div class="jungle">
<a class="btn_b" href="http://kini.nkmr.io/php/SQL/jungle.php">ジャンル別</a>&nbsp&nbsp&nbsp&nbsp
<a  class="btn_b" href="http://kini.nkmr.io/php/SQL/quiz.php">評価高い順</a>&nbsp&nbsp&nbsp&nbsp
<a  class="btn_b" href="http://kini.nkmr.io/php/SQL/comment.php">正答数低い順</a> &nbsp&nbsp&nbsp&nbsp
<a class="btn_b" href="http://kini.nkmr.io/php/SQL/quiz.php">その他</a></div>
<link rel="stylesheet" href="quiz.css">
<link rel="stylesheet" href="button.css">
<br>
<?php
$mysqli = new mysqli("localhost","nakamura-lab","n1k2m3r4fms");
$mysqli->select_db("komatsubara_db");
$results=$mysqli->query(
    "select question_table.ID, question_table.genre,question_table.num_q,question_table.rank_num,question_table.date,question_table.rank_date,question_table.ans,question_table.sent,solved_table.correct
    from question_table, solved_table
    where question_table.ID = solved_table.ID
    order by solved_table.correct");
    echo "<table>";
    echo "&nbsp&nbsp&nbsp&nbsp正解数&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp問題番号&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspジャンル&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp高評価数&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp答え数&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp問題内容";
    while($line = $results->fetch_array(MYSQLI_BOTH)){
    echo "<tr><td>";
    echo $line["correct"];
    echo "</td><td>";
    echo $line["num_q"];
    echo "</td><td>";
    echo $line["genre"];
    echo "</td><td>";
    echo $line["rank_num"];
    echo "</td><td>";
    echo $line["ans"];
    echo "</td><td>";
    echo $line["sent"];
    echo "</td></tr>";
}
echo "</table>";
$mysqli->close();
?>