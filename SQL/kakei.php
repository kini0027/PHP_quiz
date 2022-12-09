<form action="kakei.php" method="POST">
日付=<input type="text" name="year">年<input type="text" name="month">月<input type="text" name="day">日
内容=<input type="text" name="content">
金額=<input type="text" name="payment">
<input type="submit">
</form>

<?php
$mysqli = new mysqli("localhost","nakamura-lab","n1k2m3r4fms");
$mysqli->select_db("kini_db");
$Y = $_POST["year"];
$M = $_POST["month"];
$D = $_POST["day"];
$C = $_POST["content"];
$P = $_POST["payment"];
$sql="INSERT INTO kakei_table (YEAR, MONTH, DAY, CONTENT, PAYMENT) Values('$Y','$M','$D','$C','$P');";
$results=$mysqli->query($sql);
$results=$mysqli->query("select ID,YEAR,MONTH, DAY, CONTENT, PAYMENT from kakei_table");
echo "<table>";
while($line = $results->fetch_array(MYSQLI_BOTH)){
    echo "<tr><td>";
    echo $line["ID"];
    echo "</td><td>";
    echo $line["YEAR"];
    echo "</td><td>";
    echo $line["MONTH"];
    echo "</td><td>";
    echo $line["DAY"];
    echo "</td><td>";
    echo $line["CONTENT"];
    echo "</td><td>";
    echo $line["PAYMENT"];
    echo "</td></tr>";
}
echo "</table>";
$mysqli->close();
?>