#get_data.php
#The showmovies.php page should lists all movies that have been 
#entered in the database up until that moment as an HTML Table Tag.



echo '<table><tr><th>ID</th><th>Name</th><th>Doman</th><th>Propulsion</th></tr>';

$sql = "SELECT * FROM `animals`";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["ID"] . "</td><td>" . $row["name"] . "</td><td>" . $row["domain"] . "</td><td>" . $row["propulsion"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

echo '</table>';
?>