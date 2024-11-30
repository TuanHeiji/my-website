<?php
session_start();
if(!isset($_SESSION['mySession'])){
    header("location:login.php");
}
echo "Dang nhap thanh cong!";
echo "<br><a href='print_data.php'>Xem database</a><br><br>";

?>

<a href="logout.php">
   <button type="submit" name="logout">Dangxuat</button> 
</a>