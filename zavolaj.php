<?php
date_default_timezone_set('Europe/Bratislava');
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $timestamp = date("Y-m-d H:i:s");
    $data = array('url' => $url, 'timestamp' => $timestamp);
    $json = json_encode($data, JSON_UNESCAPED_SLASHES);
    file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/zavolaj.json', $json);
}
?>