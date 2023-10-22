<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>

    <?php include '../includes/header.php'; ?>
    <?php include '../includes/css-menu.php'; ?>

    <div>
        <?php
            $pr = isset($_GET['pr']) ? $_GET['pr'] : 'css-texty1';
            include "../includes/priklady/css/{$pr}.php";
        ?>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/show-code-css.js"></script>
    <script src="../js/jquery-3.7.1.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
    <script src="../js/code-active-css.js"></script>
    <script src="../js/sidebar-item-active.js"></script>
    <!-- Sidebar tlačidlo musí byť vždy ako posledné!!! -->
    <script src="../js/sidebar-toggle.js"></script>
</body>

</html>