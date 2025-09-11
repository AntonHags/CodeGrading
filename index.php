
<?php
echo "Hello! Please enter the details of the movie you've watched.";
?>

<!DOCTYPE html>

<form action="insert.php" method="POST">
    Movie Name:<input type="text" name="mname"><br>
    Movie Year:<input type="text" name="myear"><br>
    Movie Genre:<input type="text" name="mgenre"><br>       
    Movie Rating:<input type="text" name="mrating"><br>
    <input type="submit" value="Add Movie">
</form>