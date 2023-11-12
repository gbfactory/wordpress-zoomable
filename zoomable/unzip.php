<?php
require_once('../wp-load.php');

$id = $_GET['id'];
$url = wp_get_attachment_url($id);
$url = parse_url($url);

$zip = new ZipArchive;

$file = '../' . $url['path'];
$filename = basename($url['path'], '.zip');

$zip->open($file);

if (empty($_GET['file'])) {
    header('Content-Type: text/xml');
    echo $zip->getFromName($filename . '/' . $filename . '.dzi');
} else {
    header('Content-Type: image/jpeg');
    echo $zip->getFromName($filename . '/' . $filename . $_GET['file']);
}

$zip->close();
