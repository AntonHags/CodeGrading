<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Min sida</title>
    <link rel="stylesheet" href="format.css">
</head>

<div class="container">
    <body>
    <h1>Hello!</h1><br>
    <p>Please enter the details of the movie you've watched:</p>

    <form action="insert.php" method="POST">
        <label>Movie Name:</label>
        <input type="text" name="mname"><br>

        <label>Movie Year:</label>
        <input type="text" name="myear"><br>

        <label>Movie Genre:</label>
        <select name="mgenre" id="mgenre">
        <?php

        include 'db.php';

        $sql = "SELECT gid, mgenre FROM genres";
        $result = $link->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["gid"] . '">' . $row["mgenre"] . '</option>';
        }

        ?>
        </select>
        <br>

        <label>Movie Rating:</label>
        <select name="mrating" id="mrating">
        <?php 
        for ($x = 5; $x >= 1; $x-=1) {
            echo '<option value="' . $x . '">' . $x . '</option>';
            } 
        ?>
        </select>
        <br>

        <input type="submit" value="Add Movie">
    </form><br>

    <a href="showmovies.php" class="btn">Show Movies</a>

    </body>
</div>
</html>
