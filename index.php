<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domov</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>O Zbierke Úloh</h1>
                    <p>Táto zbierka úloh obsahuje všetko potrebné, aby si mohli <strong>študenti</strong> predmetu
                        <strong>Webový Dizajn 1</strong> osvojiť
                        základy tvorby webových stránok pomocou <strong>HTML, CSS a JavaScriptu</strong>.
                        Zbierku úloh spravuje učiteľ. To znamená, že ak študenti majú vyriešiť príklad alebo úlohu, tak
                        vyučujúci je schopný v <strong>reálnom čase</strong> skryť a zobraziť jedno možné riešenie na
                        webstránke pomocou
                        administrátorskeho účtu,
                        ktorý upravuje v databázi jednotlivé údaje a je schopný prídávať aj <strong>vlastné
                            príklady</strong> so
                        zadaniami a riešeniami.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="html_page.php" class="card-link">
                    <div class="card">
                        <img src="/img/html.jpg" class="card-img-top" alt="HTML Image">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="css_page.php" class="card-link">
                    <div class="card">
                        <img src="/img/css.webp" class="card-img-top" alt="CSS Image">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="javascript_page.php" class="card-link">
                    <div class="card">
                        <img src="/img/js.png" class="card-img-top" alt="JavaScript Image">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>