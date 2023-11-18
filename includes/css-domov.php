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

$isTeacher = isset($_COOKIE['isTeacher']) && $_COOKIE['isTeacher'] === 'true';

if ($isTeacher) {
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<h1 class="d-inline-block">Prihlásený ako <strong>učiteľ</strong></h1>';
    echo '<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addCSSModal"><i class="fa-solid fa-plus"></i> Pridať príklad</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

$sql = "SELECT kategoria, nazov FROM CSS ORDER BY CAST(kategoria AS UNSIGNED), kategoria, nazov";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $currentKategoria = '';
    $rows = [];
    $categoryCounts = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
        if (!isset($categoryCounts[$row['kategoria']])) {
            $categoryCounts[$row['kategoria']] = 0;
        }
        $categoryCounts[$row['kategoria']]++;
    }
    $currentKategoria = '';
    $counter = 0;
    echo '<div class="container">';
    echo '<div class="row">';
    foreach ($rows as $row) {
        $kategoria = $row['kategoria'];
        $nazov = $row['nazov'];
        if ($kategoria != $currentKategoria) {
            if ($currentKategoria != '') {
                echo '</div></div>';
            }
            echo '<div class="col-md-3"><div class="mb-2 mt-2 text-center"><div class="card-body"><h3 class="card-title">' . $kategoria . '</h3></div></div><div class="row">';
            $currentKategoria = $kategoria;
            $counter = 0;
        }
        $stromClass = ($counter == 0 && $categoryCounts[$kategoria] != 1) ? 'strom-first' : (($counter == $categoryCounts[$kategoria] - 1) ? 'strom-last' : 'strom');
        $stromClass = ($categoryCounts[$kategoria] == 1) ? 'card-hover' : $stromClass;
        echo '<div class="col-md-12"><div class="card-text text-center mb-2 ' . $stromClass . '" onclick="event.preventDefault(); window.location.href = \'css_page_priklad.php?pr=' . $nazov . '\';"><div class="card-body"><p class="card-title">' . $nazov . '</p></div></div></div>';
        $counter++;
    }
    echo '</div></div></div>';
} else {
    echo 'No results found';
}

$connection->close();
?>

<?php include '../includes/admin-css-add.php'; ?>
<script src="../js/destroy-cookie-sidebar.js"></script>