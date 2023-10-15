<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="priklad card-text">
                <h2>Texty</h2>
                <p>Vytvorte jednoduchú webovú stránku so samostatným css súborom, <strong>kde zmeníte veľkosť fontov,
                        farbu textu</strong> podľa vlastného výberu
                    s nasledujúcimi časťami:<br><br>
                    <strong>Hlavička (Header)</strong> s názvom webovej stránky a navigačným menu.<br>
                    <strong>Hlavný obsah (Main)</strong> obsahujúci článok, 3 obrázky a vložené video z YouTube.<br>
                    <strong>Päta (Footer)</strong> s copyright informáciami.<br><br>
                    Môžete sa inšpirovať obrázkom.
                <p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="img-container">
                <a href="../img/priklady/css/texty/css-texty-pr1.png" target="_blank">
                    <img src="../img/priklady/css/texty/css-texty-pr1.png" alt="Zadanie príkladu" class="img-zadania">
                    <div class="img-overlay">
                        <i class="fas fa-image"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="code-wrapper container code-pill-container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/css/texty/pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <div class="code-pill-button-container">
        <button id="show-html-code" class="btn btn-primary code-pill-button">HTML</button>
        <button id="show-css-code" class="btn btn-primary code-pill-button">CSS</button>
    </div>
    <pre id="html-code">
<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$filePath = $documentRoot . '/priklady/css/texty/pr1.html';
$htmlCode = file_get_contents($filePath);

if ($htmlCode !== false) {
    echo '<pre id="code" style="display: none;" class="code code-css">' . htmlspecialchars($htmlCode) . '</pre>';
} else {
    echo 'File not found or unable to read.';
}
?></pre>
    <pre id="css-code" style="display: none;">
<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$cssFilePath = $documentRoot . '/priklady/css/texty/pr1.css';
$cssCode = file_get_contents($cssFilePath);

if ($cssCode !== false) {
    echo '<pre id="code" class="code code-css">' . htmlspecialchars($cssCode) . '</pre>';
} else {
    echo 'CSS file not found or unable to read.';
}
?>
</pre>
</div>