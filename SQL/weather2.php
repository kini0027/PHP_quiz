<?php
$mysqli = new mysqli("localhost","nakamura-lab","n1k2m3r4fms");
$mysqli->select_db("weather_db"and"area_db");
$results=$mysqli->query(
    "select area_table.city_name, avg(weather_table.highest-weather_table.lowest)
    from weather_table, area_table
    where weather_table.city_id = area_table.city_id
    group by area_table.city_name
    order by avg(weather_table.highest-weather_table.lowest) ASC");
while($line = $results->fetch_array(MYSQLI_BOTH)){
    echo $line["area_table.city_name"];
    echo ":";
    echo $line["avg(weather_table.highest-weather_table.lowest)"];
    echo "<br>";
}
$mysqli->close();
?>