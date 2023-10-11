<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="priklad card-text">
                <h2>Tabuľky</h2>
                <p>Vytvorte tabuľku podľa obrázka nižšie.
            </div>
        </div>
        <div class="col-md-6">
            <div class="img-container">
                <a href="../img/priklady/html/tabulky-pr1.png" target="_blank">
                    <img src="../img/priklady/html/tabulky-pr1.png" alt="Zadanie príkladu" class="img-zadania">
                    <div class="img-overlay">
                        <i class="fas fa-image"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="code-wrapper container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/html/tabulky-pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <?php
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    $filePath = $documentRoot . '/priklady/html/tabulky-pr1.html';
    $htmlCode = file_get_contents($filePath);

    if ($htmlCode !== false) {
        echo '<pre id="code" style="display: none;" class="code">' . htmlspecialchars($htmlCode) . '</pre>';
    } else {
        echo 'File not found or unable to read.';
    }
    ?>
</div>