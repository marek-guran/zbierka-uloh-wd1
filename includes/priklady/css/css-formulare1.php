<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="priklad card-text">
                <h2>Formuláre</h2>
                <p>Vytvorte jednoduchý formulár, ktorý pošle údaje zadané používateľom v adresnom riadku prehliadača.
                    Formulár musí byť responzívny a moderne nadizajnovaný. Môžete sa inšpirovať obrázkom.
                <p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="img-container">
                <a href="../img/priklady/css/formulare/css-formulare-pr1.png" target="_blank">
                    <img src="../img/priklady/css/formulare/css-formulare-pr1.png" alt="Zadanie príkladu" class="img-zadania">
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
    <a href="../priklady/css/formulare/pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <div class="code-pill-button-container">
        <button id="show-html-code" class="btn btn-primary code-pill-button">HTML</button>
        <button id="show-css-code" class="btn btn-primary code-pill-button">CSS</button>
    </div>
    <pre id="html-code">
<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$filePath = $documentRoot . '/priklady/css/formulare/pr1.html';
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
$cssFilePath = $documentRoot . '/priklady/css/formulare/pr1.css';
$cssCode = file_get_contents($cssFilePath);

if ($cssCode !== false) {
    echo '<pre id="code" class="code code-css">' . htmlspecialchars($cssCode) . '</pre>';
} else {
    echo 'CSS file not found or unable to read.';
}
?>
</pre>
</div>