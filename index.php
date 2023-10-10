<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domov</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="container mt-4">
        <div class="row card-text">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Zbierka Úloh pre Webový Dizajn 1 (Učiteľská Verzia)</h1>
                    <p>Táto zbierka úloh obsahuje všetko potrebné, aby si mohli <strong>študenti</strong> predmetu
                        <strong>Webový Dizajn 1</strong> osvojiť
                        základy tvorby webových stránok pomocou <strong>HTML5, CSS3 a JavaScriptu</strong>.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="pages/html_page.php" class="card-link">
                    <div class="card card-hover">
                        <img src="/img/html.png" class="card-img-top" alt="HTML Image">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="pages/css_page.php" class="card-link">
                    <div class="card card-hover">
                        <img src="/img/css.png" class="card-img-top" alt="CSS Image">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="pages/js_page.php" class="card-link">
                    <div class="card card-hover">
                        <img src="/img/js.png" class="card-img-top" alt="JavaScript Image">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="pages/teoria.php" class="card-link">
                    <div class="card card-hover">
                        <img src="/img/teoria.png" class="card-img-top" alt="JavaScript Image">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="pages/nastroje.php" class="card-link">
                    <div class="card card-hover">
                        <img src="/img/nastroje.png" class="card-img-top" alt="JavaScript Image">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="pages/o-zbierke.php" class="card-link">
                    <div class="card card-hover">
                        <img src="/img/o-zbierke.png" class="card-img-top" alt="O Zbierke Image">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/popperjs_core-2.5.3.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
</body>

</html>