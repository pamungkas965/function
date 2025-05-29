<?php
// index.php

// Contoh fungsi sederhana
function greet($name) {
    return "Function $name Hosting!";
}

// Nama default
$name = "";

// Periksa apakah ada parameter nama dari URL
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 40px;
            text-align: center;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            display: inline-block;
            box-shadow: 0 4px 6px rgb(255, 255, 255);
        }
    </style>
</head>
<body>
    <div class="card">
        <li><a href="login.php">Menuju login</a></li>
        <h1><?php echo greet($name); ?></h1>
        <p><a href=""></a><code></code></p>
        
    </div>
</body>
</html>
