<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="priklad card-text">
                <h2>Grafy</h2>
                <p>Pomocou priloženého súboru JSON a knižnice vytvorte stránku, ktorá zobrazí jeho obsah na grafe. Máte
                    priloženú aj dokumentáciu ku knižnici. Viď. fotka.
                <p>
                    <a href="../includes/priklady/js/download/grafy/pr1.json" download class="btn btn-primary"><i
                            class="fa-solid fa-download"></i> JSON</a>
                    <a href="../includes/priklady/js/download/grafy/library-graphs.js" download
                        class="btn btn-primary"><i class="fa-solid fa-book"></i> Knižnica</a>
                    <a href="https://www.chartjs.org/docs/4.4.0/" class="btn btn-primary" target="_blank"><i
                            class="fa-regular fa-newspaper"></i> Dokumentácia</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="img-container">
                <a href="../img/priklady/js/grafy/js-grafy-pr1.png" target="_blank">
                    <img src="../img/priklady/js/grafy/js-grafy-pr1.png" alt="Zadanie príkladu" class="img-zadania">
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
    <a href="../priklady/js/grafy/pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <div class="code-pill-button-container">
        <button id="show-html-code" class="btn btn-primary code-pill-button">HTML</button>
        <button id="show-css-code" class="btn btn-primary code-pill-button">CSS</button>
        <button id="show-js-code" class="btn btn-primary code-pill-button">JavaScript</button>
    </div>
    <pre id="html-code">
<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$filePath = $documentRoot . '/priklady/js/grafy/pr1.html';
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
$cssFilePath = $documentRoot . '/priklady/js/grafy/pr1.css';
$cssCode = file_get_contents($cssFilePath);

if ($cssCode !== false) {
    echo '<pre id="code" class="code code-css">' . htmlspecialchars($cssCode) . '</pre>';
} else {
    echo 'CSS file not found or unable to read.';
}
?>
</pre>
    <pre id="js-code" style="display: none;">
<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$jsFilePath = $documentRoot . '/priklady/js/grafy/pr1.js';
$jsCode = file_get_contents($jsFilePath);

if ($jsCode !== false) {
    echo '<pre id="code" class="code code-css">' . htmlspecialchars($jsCode) . '</pre>';
} else {
    echo 'JS file not found or unable to read.';
}
?>
</pre>
</div>