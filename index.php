
<?php
echo "Hello! Please enter the details of the movie you've watched.";
?>

<!DOCTYPE html>

<form action="insert.php" method="POST">
    Movie Name:<input type="text" name="mname"><br>
    Movie Year:<input type="text" name="myear"><br>
    Movie Genre:
    <select name="mgenre" id="mgenre">
        <option value="1">Action/Adventure</option>
        <option value="2">Comedy</option>
        <option value="3">Drama</option>
        <option value="4">Fantasy/Sci-Fi</option>
    </select>
    <br>  
    Movie Rating:<input type="text" name="mrating"><br> <!-- Drop-down här också? -->
    <input type="submit" value="Add Movie">
</form>

<!-- Länk till showmovies.php? -->