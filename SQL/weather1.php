<?php
$mysqli = new mysqli("localhost","nakamura-lab","n1k2m3r4fms");
$mysqli->select_db("weather_db");
$results=$mysqli->query(
    "select year,month,day,weather from weather_table");
echo "<table>";
while($line = $results->fetch_array(MYSQLI_BOTH)){
    echo "<tr><td>";
    echo $line["year"];
    echo "/";
    echo $line["month"];
    echo "/";
    echo $line["day"];
    echo ":";
    echo "</td><td>";
    echo $line["weather"];
    echo "</td></tr>";
}
echo "</table>";
$mysqli->close();
?>
