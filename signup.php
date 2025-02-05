<?php
session_start();
include('db_connect.php');

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // اضافه کردن کاربر جدید به دیتابیس
    $query = $conn->prepare("INSERT INTO members (username, email, password) VALUES (?, ?, ?)");
    $query->bind_param('sss', $username, $email, $password);
    $query->execute();

    if ($query->affected_rows == 1) {
        $_SESSION['username'] = $username;
        header('Location: index.php'); // تغییر به index.php
        exit();
    } else {
        echo "خطا در ثبت‌نام. لطفا دوباره تلاش کنید.";
    }
}
?>
