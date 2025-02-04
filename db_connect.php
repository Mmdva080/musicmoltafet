<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "members"; // نام دیتابیس خود را جایگزین کنید

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
