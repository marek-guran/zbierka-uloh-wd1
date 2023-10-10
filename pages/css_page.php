<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<body>

    <?php include '../includes/header.php'; ?>

    <div>
        <div class="navigation mt-3" role="group" aria-label="Button Group">
            <a href="?pr=pr1" class="btn btn-primary btn-sm btn-group-toggle">1</a>
            <a href="?pr=pr2" class="btn btn-primary btn-sm btn-group-toggle">2</a>
            <a href="?pr=pr3" class="btn btn-primary btn-sm btn-group-toggle">3</a>
            <a href="?pr=pr4" class="btn btn-primary btn-sm btn-group-toggle">4</a>
        </div>
        <?php
            $pr = isset($_GET['pr']) ? $_GET['pr'] : 'pr1';
            include "../includes/priklady/css/{$pr}.php";
        ?>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/show-code-css.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/popperjs_core-2.5.3.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
</body>

</html>