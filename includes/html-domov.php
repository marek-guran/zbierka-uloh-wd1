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

$sql = "SELECT kategoria, nazov FROM HTML ORDER BY CAST(kategoria AS UNSIGNED), kategoria, nazov";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $currentKategoria = '';
    echo '<div class="container">';
    while ($row = $result->fetch_assoc()) {
        $kategoria = $row['kategoria'];
        $nazov = $row['nazov'];
        if ($kategoria != $currentKategoria) {
            if ($currentKategoria != '') {
                echo '</div>';
            }
            echo '<div class="row"><div class="col-md-12"><h2>' . $kategoria . '</h2></div></div><div class="row">';
            $currentKategoria = $kategoria;
        }
        echo '<div class="col-md-2"><p><a href="html_page_priklad.php?pr=' . $nazov . '">' . $nazov . '</a></p></div>';
    }
    echo '</div></div>';
} else {
    echo 'No results found';
}

$connection->close();
?>