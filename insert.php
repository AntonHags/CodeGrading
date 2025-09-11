<?php
#Insertdata.php

#insert.php -- is the php code to receive the input from index.php
#HTML Form and insert the new movie data into the database. 
#It should redirects back to index.php after success or fail (a message 
#will be nice to have in both cases).

include 'db.php';

// Fetch data from POST request
$id = $_POST['id'];

$name = $_POST['mname'];
$year = $_POST['myear'];
$genre = $_POST['mgenre'];
$rating = $_POST['mrating'];

// FROM HÄR ENDAS COPYPASTE

$sql = "INSERT INTO animals (name, year, propulsion) VALUES (?, ?, ?)";
$stmt = $link->prepare($sql);

// s for string
$stmt->bind_param("sss", $name, $domain, $propulsion);
$result = $stmt->execute();

if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the database connection
$link->close();
?>