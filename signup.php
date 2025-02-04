<?php
session_start();
include('db_connect.php');

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO members (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['username'] = $username;
        header('Location: index.html');
        exit();
    } else {
        echo "خطا در ثبت‌نام. لطفا دوباره تلاش کنید.";
    }
}
?>
