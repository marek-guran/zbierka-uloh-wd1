<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Refresh:0;");
}
?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>

    <?php include '../includes/header.php'; ?>
    <?php include '../includes/html-menu.php'; ?>

    <div>
        <?php
        $pr = isset($_GET['pr']) ? $_GET['pr'] : 'html-domov';
        include "../includes/{$pr}.php";
        ?>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/show-code.js"></script>
    <script src="../js/sidebar-item-active.js"></script>
    <script src="../js/jquery-3.7.1.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
    <!-- Sidebar tlačidlo musí byť vždy ako posledné!!! -->
    <script src="../js/sidebar-toggle.js"></script>
</body>

</html>