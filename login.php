<?php
session_start();
include('db_connect.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // استفاده از پرس‌وجوهای آماده برای امنیت بیشتر
    $query = $conn->prepare("SELECT * FROM members WHERE username = ? AND password = ?");
    $query->bind_param('ss', $username, $password);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header('Location: index.php'); // تغییر به index.php
        exit();
    } else {
        echo "نام کاربری یا رمز عبور اشتباه است.";
    }
}
?>
