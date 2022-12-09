<form action="live.php" method="POST">
アーティスト=<input type="text" name="Artist">
日付=<input type="text" name="Date">
場所=<input type="text" name="Place">
<input type="submit">
</form>

<?php
$mysqli = new mysqli("localhost","nakamura-lab","n1k2m3r4fms");
$mysqli->select_db("kini_db");

if (isset($_POST["Artist"])) {
    echo $_POST["Artist"];
}
if (isset($_POST["Date"])) {
    echo $_POST["Date"];
}
if (isset($_POST["Place"])) {
    echo $_POST["Place"];
}

$A = $_POST["Artist"];
$D = $_POST["Date"];
$P = $_POST["Place"];
$sql="INSERT INTO live_table (Artist, Date, Place) Values('$A','$D','$P');";
$results=$mysqli->query($sql);
$results=$mysqli->query("select Artist, Date, Place from live_table");
echo "<table>";
while($line = $results->fetch_array(MYSQLI_BOTH)){
    echo "<tr><td>";
    echo $line["Artist"];
    echo "</td><td>";
    echo $line["Date"];
    echo "</td><td>";
    echo $line["Place"];
    echo "</td></tr>";
}
echo "</table>";
$mysqli->close();
?>