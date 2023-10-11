<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="priklad card-text">
                <h2>Meta údaje</h2>
                <p>Peter si založil internetový obchod na ktorom predáva tlačiarne a nepáči sa mu ako vyzerajú výsledky
                    na
                    internetových prehliadačoch. Ukazuje mu tam náhodný text z jeho webstránky. Vytvorte webovú stránku,
                    ktorá
                    obsahuje aspoň 3 produkty s cenami, niečo o Petrovom obchode a opravte mu meta údaje aby si ho mohli
                    zákazníci
                    lepšie všimnúť.
                <p>
                <p><strong>Výsledná stránka by mala vyzerať približne takto:</strong>
                <p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="img-container">
                <a href="../img/priklady/html/meta-pr1.png" target="_blank">
                    <img src="../img/priklady/html/meta-pr1.png" alt="Zadanie príkladu" class="img-zadania">
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
    <a href="../priklady/html/meta-pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <?php
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    $filePath = $documentRoot . '/priklady/html/meta-pr1.html';
    $htmlCode = file_get_contents($filePath);

    if ($htmlCode !== false) {
        echo '<pre id="code" style="display: none;" class="code">' . htmlspecialchars($htmlCode) . '</pre>';
    } else {
        echo 'File not found or unable to read.';
    }
    ?>
</div>