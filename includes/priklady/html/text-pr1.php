<div class="navigation mt-3" role="group" aria-label="Button Group">
    <a href="?pr=text-pr1" class="btn btn-primary btn-sm btn-group-toggle">1</a>
    <a href="?pr=text-pr2" class="btn btn-primary btn-sm btn-group-toggle">2</a>
</div>
<div class="priklad container card-text">
    <h2>Príklad 1</h2>
    <p>Vytvorte podobnú webstránku podľa obrázkovej predlohy.
    <p>
    <div class="img-container">
        <a href="../img/priklady/html/text-pr1.png" target="_blank">
            <img src="../img/priklady/html/text-pr1.png" alt="Zadanie príkladu" class="img-zadania">
            <div class="img-overlay">
                <i class="fas fa-image"></i>
            </div>
        </a>
    </div>
</div>

<div class="code-wrapper container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/html/text-pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <?php
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    $filePath = $documentRoot . '/priklady/html/text-pr1.html';
    $htmlCode = file_get_contents($filePath);

    if ($htmlCode !== false) {
        echo '<pre id="code" style="display: none;" class="code">' . htmlspecialchars($htmlCode) . '</pre>';
    } else {
        echo 'File not found or unable to read.';
    }
    ?>
</div>