<?php
$json_file = 'zadanie/zadanie.json';

// Check if folder exists
if (!file_exists($json_file)) {
    header("Location: error.php"); // Redirect to page with error message
    exit(); // Stop executing the current script
}

$json_data = file_get_contents($json_file);
$data = json_decode($json_data, true);

$visible = isset($data['visible']) ? $data['visible'] : false;

if ($visible) {
    header("Location: index.html"); // Redirect to index.html
    exit();
}

$isTeacher = isset($_COOKIE['isTeacher']) ? $_COOKIE['isTeacher'] : false;
if (!$isTeacher) {
    header("Location: /nope.php"); // Redirect to page with error message
    exit();
} else {
    header("Location: index.html"); // Redirect to index.html
    exit();
}
?>