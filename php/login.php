<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if (mysqli_num_rows($sql) > 0) {
        $result = mysqli_fetch_assoc($sql);
        $status = "Active Now";
        $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$result['unique_id']}");
        if ($sql2) {
            $_SESSION['unique_id'] = $result['unique_id'];
            echo "success";
        }
    } else {
        echo "Bad Credentials";
    }
} else {
    echo "All input fields are required";
}
