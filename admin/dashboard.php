<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yönetim Paneli</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div style="max-width: 800px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
        <h2>Yönetim Paneli</h2>
        <p>Hoş geldiniz, <strong>admin</strong>!</p>
        <p><a href="edit.php?section=home">Anasayfa</a> | <a href="edit.php?section=about">Hakkımızda</a> | <a href="edit.php?section=activities">Faaliyetler</a> | <a href="edit.php?section=installation">Montaj</a> | <a href="edit.php?section=references">Referanslar</a> | <a href="edit.php?section=contact">İletişim</a></p>
        <a href="logout.php">Çıkış</a>
    </div>
</body>
</html>
