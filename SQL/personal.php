<body>
個人クイズ履歴<br>
<?php
$mysqli = new mysqli("localhost","nakamura-lab","n1k2m3r4fms");
$mysqli->select_db("komatsubara_db");
$results=$mysqli->query(
"select solved_table.ID,solved_table.q_num,solved_table.rank_num,solved_table.ans_time, question_table.sent from question_table,solved_table
where solved_table.ID=0
order by solved_table.ID");
echo "<table>";
while($line = $results->fetch_array(MYSQLI_BOTH)){
    echo "<tr><td>";
    echo $line["ID"];
    echo "</td><td>";
    echo $line["q_num"];
    echo "</td><td>";
    echo $line["rank_num"];
    echo "</td><td>";
    echo $line["ans_time"];
    echo "</td><td>";
    echo $line["sent"];
    echo "</td></tr>";
}
echo "</table>";
$mysqli->close();
?>