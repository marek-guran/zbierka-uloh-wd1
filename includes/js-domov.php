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

$sql = "SELECT kategoria, nazov FROM JS ORDER BY CAST(kategoria AS UNSIGNED), kategoria, nazov";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $currentKategoria = '';
    echo '<div class="container">';
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
        $kategoria = $row['kategoria'];
        $nazov = $row['nazov'];
        if ($kategoria != $currentKategoria) {
            if ($currentKategoria != '') {
                echo '</div></div>';
            }
            echo '<div class="col-md-4"><div class="mb-3 text-center"><div class="card-body"><h3 class="card-title">' . $kategoria . '</h3></div></div><div class="row">';
            $currentKategoria = $kategoria;
        }
        echo '<div class="col-md-6"><div class="card-hover card-text mb-3 text-center" onclick="event.preventDefault(); window.location.href = \'js_page_priklad.php?pr=' . $nazov . '\';"><div class="card-body"><p class="card-title">' . $nazov . '</p></div></div></div>';
    }
    echo '</div></div></div>';
} else {
    echo 'No results found';
}

$connection->close();
?>