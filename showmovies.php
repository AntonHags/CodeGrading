<!DOCTYPE html>
<a href="index.php">Lägg till film</a>

<?php
#get_data.php
#The showmovies.php page should lists all movies that have been 
#entered in the database up until that moment as an HTML Table Tag.

include 'db.php';

echo '<table><tr><th>Movie ID</th><th>Movie Name</th><th>Release Year</th><th>Genre ID</th><th>Rating</th></tr>';

$sql = "SELECT * FROM `movies`";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["mid"] . "</td><td>" . $row["mname"] . "</td><td>" . $row["myear"] . "</td><td>" . $row["mgenreid"] . "</td><td>" . $row["mratingx"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

echo '</table>';
?>
