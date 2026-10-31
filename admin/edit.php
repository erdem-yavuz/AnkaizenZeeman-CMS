<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$section = $_GET['section'] ?? 'home';
$file = __DIR__ . '/../data/content.json';
$json = file_get_contents($file);
$data = json_decode($json, true);

if ($_POST) {
    $data[$section] = $_POST;
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>İçerik Düzenle - <?php echo $section; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div style="max-width: 800px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
        <h2><?php echo ucfirst($section); ?> İçeriği Düzenle</h2>
        <form method="POST">
            <?php if ($section === 'home'): ?>
                <label>Hero Başlık:</label><br>
                <input type="text" name="hero_title" value="<?php echo $data[$section]['hero_title'] ?? ''; ?>"><br><br>
                <label>Hero Alt Başlık:</label><br>
                <input type="text" name="hero_subtitle" value="<?php echo $data[$section]['hero_subtitle'] ?? ''; ?>"><br><br>
                <label>Buton Metni:</label><br>
                <input type="text" name="hero_button" value="<?php echo $data[$section]['hero_button'] ?? ''; ?>"><br><br>
            <?php elseif ($section === 'about'): ?>
                <label>İçerik:</label><br>
                <textarea name="content" rows="10" style="width: 100%;"><?php echo $data[$section]['content'] ?? ''; ?></textarea><br><br>
            <?php elseif ($section === 'activities'): ?>
                <label>Başlık:</label><br>
                <input type="text" name="title" value="<?php echo $data[$section]['title'] ?? ''; ?>"><br><br>
                <h3>Öğeler</h3>
                <?php foreach ($data[$section]['items'] as $i => $item): ?>
                    <div style="margin-bottom: 10px;">
                        <label>Başlık:</label><input type="text" name="items[<?php echo $i; ?>][title]" value="<?php echo $item['title'] ?? ''; ?>"><br>
                        <label>İçerik:</label><textarea name="items[<?php echo $i; ?>][content]" rows="3"><?php echo $item['content'] ?? ''; ?></textarea><br>
                    </div>
                <?php endforeach; ?>
            <?php elseif ($section === 'installation'): ?>
                <label>Başlık:</label><br>
                <input type="text" name="title" value="<?php echo $data[$section]['title'] ?? ''; ?>"><br><br>
                <h3>Öğeler</h3>
                <?php foreach ($data[$section]['items'] as $i => $item): ?>
                    <div style="margin-bottom: 10px;">
                        <label>Başlık:</label><input type="text" name="items[<?php echo $i; ?>][title]" value="<?php echo $item['title'] ?? ''; ?>"><br>
                        <label>İçerik:</label><textarea name="items[<?php echo $i; ?>][content]" rows="3"><?php echo $item['content'] ?? ''; ?></textarea><br>
                    </div>
                <?php endforeach; ?>
            <?php elseif ($section === 'references'): ?>
                <label>Başlık:</label><br>
                <input type="text" name="title" value="<?php echo $data[$section]['title'] ?? ''; ?>"><br><br>
                <h3>Öğeler</h3>
                <?php foreach ($data[$section]['items'] as $i => $item): ?>
                    <div style="margin-bottom: 10px;">
                        <label>Başlık:</label><input type="text" name="items[<?php echo $i; ?>][title]" value="<?php echo $item['title'] ?? ''; ?>"><br>
                        <label>İçerik:</label><textarea name="items[<?php echo $i; ?>][content]" rows="3"><?php echo $item['content'] ?? ''; ?></textarea><br>
                    </div>
                <?php endforeach; ?>
            <?php elseif ($section === 'contact'): ?>
                <label>Adres:</label><br>
                <input type="text" name="address" value="<?php echo $data[$section]['address'] ?? ''; ?>"><br><br>
                <label>Telefon:</label><br>
                <input type="text" name="phone" value="<?php echo $data[$section]['phone'] ?? ''; ?>"><br><br>
                <label>E-posta:</label><br>
                <input type="text" name="email" value="<?php echo $data[$section]['email'] ?? ''; ?>"><br><br>
                <label>Web:</label><br>
                <input type="text" name="website" value="<?php echo $data[$section]['website'] ?? ''; ?>"><br><br>
            <?php endif; ?>
            <button type="submit">Kaydet</button>
        </form>
    </div>
</body>
</html>
