<div class="navigation mt-3" role="group" aria-label="Button Group">
    <a href="?pr=css-pr1" class="btn btn-primary btn-sm btn-group-toggle">1</a>
    <a href="?pr=css-pr2" class="btn btn-primary btn-sm btn-group-toggle">2</a>
    <a href="?pr=css-pr3" class="btn btn-primary btn-sm btn-group-toggle">3</a>
    <a href="?pr=css-pr4" class="btn btn-primary btn-sm btn-group-toggle">4</a>
</div>
<div class="priklad container card-text">
    <h2>Príklad 3</h2>
    <p>Vytvorte webstránku na ktorej bude animovaná lopta, ktorá sa bude hýbať stále dookola po okraji obrazovky. Lopta nesmie zájsť mimo obrazovku.
    <p>
</div>

<div class="code-wrapper container code-pill-container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/css/pr3.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <div class="code-pill-button-container">
        <button id="show-html-code" class="btn btn-primary code-pill-button">HTML</button>
        <button id="show-css-code" class="btn btn-primary code-pill-button">CSS</button>
    </div>
    <pre id="html-code">
<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$filePath = $documentRoot . '/priklady/css/pr3.html';
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
$cssFilePath = $documentRoot . '/priklady/css/pr3.css';
$cssCode = file_get_contents($cssFilePath);

if ($cssCode !== false) {
    echo '<pre id="code" class="code code-css">' . htmlspecialchars($cssCode) . '</pre>';
} else {
    echo 'CSS file not found or unable to read.';
}
?>
</pre>
</div>