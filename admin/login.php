<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit;
}

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === '123456') {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Geçersiz kullanıcı adı veya şifre.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yönetim Paneli - Giriş</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div style="max-width: 400px; margin: 100px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
        <h2>Yönetim Paneli</h2>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Kullanıcı Adı" required><br><br>
            <input type="password" name="password" placeholder="Şifre" required><br><br>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
</body>
</html>
