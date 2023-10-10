<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<body>

    <?php include '../includes/header.php'; ?>
    <?php include '../includes/html-menu.php'; ?>

    <div>
        <div class="navigation mt-3" role="group" aria-label="Button Group">
            <a href="?pr=pr1" class="btn btn-primary btn-sm btn-group-toggle">Headers</a>
            <a href="?pr=pr2" class="btn btn-primary btn-sm btn-group-toggle">Paragrafy</a>
            <a href="?pr=pr3" class="btn btn-primary btn-sm btn-group-toggle">Články</a>
        </div>
        <?php
        $pr = isset($_GET['pr']) ? $_GET['pr'] : 'pr1';
        include "../includes/priklady/html/{$pr}.php";
        ?>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/show-code.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#sidebarToggle").click(function () {
                $("#mySidebar").toggleClass("open");
            });
        });
    </script>
</body>

</html>