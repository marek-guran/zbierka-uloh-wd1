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
    echo '<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addJSModal"><i class="fa-solid fa-plus"></i> Pridať príklad</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
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
            echo '<div class="col-md-3"><div class="mb-3 text-center"><div class="card-body"><h3 class="card-title">' . $kategoria . '</h3></div></div><div class="row">';
            $currentKategoria = $kategoria;
        }
        echo '<div class="col-md-12"><div class="card-hover card-text mb-3 text-center" onclick="event.preventDefault(); window.location.href = \'js_page_priklad.php?pr=' . $nazov . '\';"><div class="card-body"><p class="card-title">' . $nazov . '</p></div></div></div>';
    }
    echo '</div></div></div>';
} else {
    echo 'No results found';
}

$connection->close();
?>

<?php include '../includes/admin-js-add.php'; ?>
<script src="../js/destroy-cookie-sidebar.js"></script>