<!DOCTYPE html>
<a href="index.php">Add movie</a>

<?php
#get_data.php
#The showmovies.php page should lists all movies that have been 
#entered in the database up until that moment as an HTML Table Tag.

include 'db.php';

echo '<table><tr><th>Movie ID</th><th>Movie Name</th><th>Release Year</th><th>Genre ID</th><th>Rating</th></tr>';

$sql = "SELECT m.mid, m.mname, m.myear, g.mgenre, m.mrating
        FROM movies m
        LEFT JOIN genres g ON m.mgenreid = g.gid";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["mid"] . "</td>
                <td>" . $row["mname"] . "</td>
                <td>" . $row["myear"] . "</td>
                <td>" . $row["mgenre"] . "</td>
                <td>" . $row["mrating"] . "</td>
              </tr>";
    }
} else {
    echo "0 results";
}

echo '</table>';

?>
