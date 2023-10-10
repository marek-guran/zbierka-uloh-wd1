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
        <button id="show-html-code" class="code-pill-button btn btn-primary">HTML</button>
        <button id="show-css-code" class="code-pill-button btn btn-primary">CSS</button>
    </div>
    <pre id="html-code">
<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$filePath = $documentRoot . '/priklady/css/pr3.html';
$htmlCode = file_get_contents($filePath);

if ($htmlCode !== false) {
    echo '<pre id="code" style="display: none;" class="code">' . htmlspecialchars($htmlCode) . '</pre>';
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
    echo '<pre id="code" class="code">' . htmlspecialchars($cssCode) . '</pre>';
} else {
    echo 'CSS file not found or unable to read.';
}
?>
</pre>
</div>