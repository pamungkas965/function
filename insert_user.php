<?php
require 'config.php';

$admin_username = "admin";
$admin_password = password_hash("admin123", PASSWORD_DEFAULT);
$user_username = "user";
$user_password = password_hash("user123", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "sss", $admin_username, $admin_password, $role);
$role = 'admin';
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_param($stmt, "sss", $user_username, $user_password, $role);
$role = 'user';
mysqli_stmt_execute($stmt);

echo "User admin dan user berhasil dibuat!";
?>