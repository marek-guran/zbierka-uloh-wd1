<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nástroje</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-5.3.2.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>

    <?php include '../includes/header.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header card-text">
                    <h1>Nástroje pre Webový Dizajn 1</h1>
                    <p>Tu nájdete pár nástrojov, ktoré by ste mohli použiť pri tvorbe webových stránok na predmete
                        Webový Dizajn 1. Existuje mnoho ďalších programov a online editorov.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <h4 class="text-center"><strong>Programy</strong></h4>
                <div id="carouselProgramy" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card card-text">
                                <img src="../img/nastroje/vs-code-logo.svg" class="card-img-top" alt="Visual Studio Code">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Visual Studio Code</h3>
                                    <p><strong>Visual Studio Code</strong> je editor zdrojového kódu vyvinutý
                                        spoločnosťou Microsoft pre Windows, Linux a macOS. Obsahuje podporu pre ladenie,
                                        zabudovanú kontrolu Git a GitHub, zvýrazňovanie syntaxu, inteligentné
                                        dokončovanie kódu, fragmenty a refaktorovanie kódu.</p>
                                    <div class="text-center">
                                        <button class="btn btn-primary"
                                            onclick="window.open('https://code.visualstudio.com/', '_blank')">Otvoriť</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card card-text">
                                <img src="../img/nastroje/sublime-text-logo.svg" class="card-img-top" alt="Sublime Text">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Sublime Text</h3>
                                    <p><strong>Sublime Text</strong> je proprietárny multiplatformový editor zdrojového
                                        kódu s Python
                                        aplikáciou programovacieho rozhrania (API). Podporuje mnoho programovacích
                                        jazykov a značkovacích jazykov a jeho funkčnosť môže byť rozšírená používateľmi
                                        pomocou pluginov, ktoré sú zvyčajne vyvíjané a udržiavané komunitou pod
                                        licenciami slobodného softvéru.</p>
                                    <div class="text-center">
                                        <button class="btn btn-primary"
                                            onclick="window.open('https://www.sublimetext.com/', '_blank')">Otvoriť</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card card-text">
                                <img src="../img/nastroje/brackets-logo.svg" class="card-img-top" alt="Brackets">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Brackets</h3>
                                    <p><strong>Brackets</strong> je bezplatný a open-source editor zdrojového kódu pre
                                        webový dizajn a vývoj
                                        postavený na technológiách webu, ako sú HTML, CSS a JavaScript. Projekt bol
                                        vytvorený a udržiavaný spoločnosťou Adobe a je uvoľnený pod licenciou MIT.</p>
                                    <div class="text-center">
                                        <button class="btn btn-primary"
                                            onclick="window.open('http://brackets.io/', '_blank')">Otvoriť</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-controls">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProgramy"
                            data-bs-slide="prev">
                            <span class="fa-solid fa-chevron-left" aria-hidden="true"></span>
                            <span class="visually-hidden">Späť</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProgramy"
                            data-bs-slide="next">
                            <span class="fa-solid fa-chevron-right" aria-hidden="true"></span>
                            <span class="visually-hidden">Ďalej</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h4 class="text-center"><i class="fa-brands fa-github"></i> <strong>GitHub</strong></h4>
                <div class="card card-text card-hover" onclick="window.open('http://github.com/', '_blank')">
                    <div class="card-body">
                        <p><strong>GitHub</strong> je webová platforma pre verzovanie a spoluprácu, ktorá zahŕňa funkcie
                            ako sledovanie
                            chýb, požiadaviek na funkcie, správu úloh a wiki pre každý projekt.</p>
                    </div>
                </div>
                <h4 class="text-center"><strong>W3Schools</strong></h4>
                <div class="card card-text card-hover" onclick="window.open('https://www.w3schools.com/', '_blank')">
                    <div class="card-body">
                        <p><strong>W3Schools</strong> je webová stránka, ktorá ponúka bezplatné online kurzy a príručky
                            pre web development. Obsahuje informácie o HTML, CSS, JavaScript, SQL, PHP, Python,
                            Bootstrap, Java a mnoho ďalších technológií.</p>
                    </div>
                </div>
                <h4 class="text-center"><i class="fa-brands fa-codepen"></i> <strong>CodePen</strong></h4>
                <div class="card card-text card-hover" onclick="window.open('https://codepen.io/', '_blank')">
                    <div class="card-body">
                        <p><strong>CodePen</strong> je webová platforma pre tvorbu, zdieľanie a testovanie kódu v
                            reálnom čase. Umožňuje vývojárom a dizajnérom ukázať svoje projekty a získať spätnú väzbu od
                            komunity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/jquery-3.7.1.js"></script>
    <script src="../js/bootstrap-5.3.2.js"></script>
</body>

</html>