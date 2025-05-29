<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background-image: url('pexels-kasperphotography-1042423.jpg'); /* Path ke gambar */
            background-size: cover; /* Menyesuaikan ukuran gambar */
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            margin: 0;
        }
        
        h3 {
            color: floralwhite;
        }

        p {
            color: aliceblue;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3>User Dashboard</h3>
        <p>Selamat datang Narendra, <?php echo $_SESSION['username']; ?></p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>