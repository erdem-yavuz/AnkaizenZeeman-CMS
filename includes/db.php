<?php
function getContent($key) {
    $file = __DIR__ . '/../data/content.json';
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    return $data[$key] ?? [];
}
?>
