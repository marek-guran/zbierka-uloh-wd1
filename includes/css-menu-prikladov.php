<?php
$host = 'zbierka-db';
$port = 3306;
$username = 'admin';
$password = getenv('TEACHER_PASSWORD');
$database = 'zbierka';

$connection = new mysqli($host, $username, $password, $database, $port);

if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

if (isset($_GET['pr'])) {
    $selected = $_GET['pr'];
    $category = '';

    $stmt = $connection->prepare("SELECT kategoria FROM CSS WHERE nazov = ?");
    $stmt->bind_param("s", $selected);
    $stmt->execute();
    $stmt->bind_result($category);
    $stmt->fetch();
    $stmt->close();

    if (!empty($category)) {
        $stmt = $connection->prepare("SELECT COUNT(*) FROM CSS WHERE kategoria = ?");
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 1) {
            $stmt = $connection->prepare("SELECT nazov FROM CSS WHERE kategoria = ? ORDER BY nazov");
            $stmt->bind_param("s", $category);
            $stmt->execute();
            $stmt->bind_result($name);
            $buttons = '';
            while ($stmt->fetch()) {
                $active = '';
                if ($_GET['pr'] == $name) {
                    $active = ' active';
                }
                $buttons .= '<a href="?pr=' . $name . '" class="btn btn-primary btn-sm btn-group-toggle' . $active . '" style="margin-right: 2px; margin-left: 2px; margin-bottom: 4px;">' . $name . '</a>';
            }
            $stmt->close();
            echo '<div class="navigation mt-3" role="group" aria-label="Button Group">' . $buttons . '</div>';
        }
    }
}
?>