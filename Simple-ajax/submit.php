<?php
require_once "DB.php";
$name =  $_POST['name'];
$email = $_POST['email'];

if(mysqli_query($conn, "INSERT INTO ajax_demo(name, email) VALUES('" . $name . "', '" . $email . "')")) {
echo '1';
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>