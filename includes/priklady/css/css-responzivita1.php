<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="priklad card-text">
                <h2>Responzivita</h2>
                <p>Vytvorte stránku na ktorej budete mať 2 karty, každá karta bude mať aspoň jeden obrázok a pod
                    obrázkom text. Ako ďalšie vytvoríte 3 články a každý z nich bude mať vlastný názov.
                    Vašou úlohou bude spraviť túto stránku, aby sa dala prehľadne prezerať na akejkoľvek veľkosti
                    obrazovky. Môžete sa inšpirovať videom.
                <p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video-container">
                <video src="../video/priklady/css/responzivita/pr1.mp4" alt="Video príkladu" controls></video>
            </div>
        </div>
    </div>
</div>

<div class="code-wrapper container code-pill-container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/css/responzivita/pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <div class="code-pill-button-container">
        <button id="show-html-code" class="btn btn-primary code-pill-button">HTML</button>
        <button id="show-css-code" class="btn btn-primary code-pill-button">CSS</button>
    </div>
    <pre id="html-code">
<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$filePath = $documentRoot . '/priklady/css/responzivita/pr1.html';
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
$cssFilePath = $documentRoot . '/priklady/css/responzivita/pr1.css';
$cssCode = file_get_contents($cssFilePath);

if ($cssCode !== false) {
    echo '<pre id="code" class="code code-css">' . htmlspecialchars($cssCode) . '</pre>';
} else {
    echo 'CSS file not found or unable to read.';
}
?>
</pre>
</div>