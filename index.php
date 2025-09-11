
<?php
# The index.php page should contain an 
# HTML Form Tag for entering movie information into the database.

# mname
# myear
# mgenre -> dropdown
# mrating

echo "hello";

?>

<!DOCTYPE html>

<form action="insert.php" method="POST">
    Movie Name:<input type="text" name="mname"><br>
    Movie Year:<input type="text" name="myear"><br>
    Movie Genre:<input type="text" name="mgenre"><br>       #dropdown
    Movie Rating:<input type="text" name="mrating"><br>
    <input type="submit" value="Add">
</form>