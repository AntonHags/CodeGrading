<?php

#Insertdata.php

#insert.php -- is the php code to receive the input from index.php
#HTML Form and insert the new movie data into the database. 
#It should redirects back to index.php after success or fail (a message 
#will be nice to have in both cases).
include 'db.php';

// Fetch data from POST request
$mname = $_POST['mname'];
$myear = $_POST['myear'];
$mgenre = $_POST['mgenre'];
$mrating = $_POST['mrating'];

$sql = "INSERT INTO movies (mname, myear, mgenreid, mrating) VALUES (?, ?, ?, ?)";
$stmt = $link->prepare($sql);

// s for string i for integer
$stmt->bind_param("ssii", $mname, $myear, $mgenre, $mrating);
$result = $stmt->execute();

    
if ($result) {        
    $message = "New record created successfully!";
} else {
    $message = "Error: " . $stmt->error;
}

$link->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Success!</title>
    <link rel="stylesheet" href="format.css">
</head>
<body>
    <div class="vertical">
        <div class="message"><?=$message?></div>

        <a href="index.php" class="btn">Add more movies</a>
        <a href="showmovies.php" class="btn">Show all movies</a>
    </div>
</body>
</html>


