<form action="keijiban.php" method="POST">
Name=<input type="text" name="name">
Message=<input type="text" name="message">
<input type="submit">
</form>

<?php
$mysqli = new mysqli("localhost","nakamura-lab","n1k2m3r4fms");
$mysqli->select_db("kini_db");
$N = $_POST["name"];
$M = $_POST["message"];
$sql="INSERT INTO BBS_table (name, message) Values('$N','$M');";
$results=$mysqli->query($sql);
$results=$mysqli->query("select ID,name,message from BBS_table");
echo "<table>";
while($line = $results->fetch_array(MYSQLI_BOTH)){
    echo "<tr><td>";
    echo $line["ID"];
    echo "</td><td>";
    echo $line["name"];
    echo "</td><td>";
    echo $line["message"];
    echo "</td></tr>";
}
echo "</table>";
$mysqli->close();
?>