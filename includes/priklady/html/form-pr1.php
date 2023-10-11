<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="priklad card-text">
                <h2>Formuláre</h2>
                <p>Vašou úlohou je vytvoriť novú webovú stránku, ktorá obsahuje formuláre. Postupujte podľa
                    nasledujúcich
                    krokov:<br><br>
                    <strong>Názov stránky:</strong> Príklad 3<br>
                    <br>
                    <strong>Hlavička:</strong> Vložte nadpis úrovne 1 s názvom vašej stránky do hlavičky.<br>
                    <br>
                    <strong>Formulár 1:</strong> Kontaktujte nás:<br>
                    Vytvorte formulár, ktorý umožní používateľom kontaktovať vás. Formulár by mal obsahovať tieto
                    polia:<br>
                    Meno a priezvisko (textové pole)<br>
                    Email (textové pole pre email)<br>
                    Správa (textové pole alebo textové pole s veľkým textovým obsahom)<br>
                    Pridajte tlačidlo s textom "Odoslať". Po stlačení tlačidla by mali údaje z formulára byť odoslané na
                    server.<br>
                    <br>
                    <strong>Formulár 2:</strong> Prihlásenie:<br>
                    Vytvorte druhý formulár, ktorý slúži na prihlásenie používateľov. Formulár by mal obsahovať tieto
                    polia:<br>
                    Používateľské meno (textové pole)<br>
                    Heslo (textové pole so skrytými znakmi)<br>
                    Pridajte tlačidlo s textom "Prihlásiť sa".<br><br>
                    <strong>Päta stránky:</strong> Pridajte pätu stránky, ktorá obsahuje váš kontakt (napríklad emailovú
                    adresu
                    alebo telefónne číslo).
                <p>
                <p><strong>Výsledná stránka by mala vyzerať približne takto:</strong>
                <p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="img-container">
                <a href="../img/priklady/html/form-pr1.png" target="_blank">
                    <img src="../img/priklady/html/form-pr1.png" alt="Zadanie príkladu" class="img-zadania">
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
    <a href="../priklady/html/form-pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <?php
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    $filePath = $documentRoot . '/priklady/html/form-pr1.html';
    $htmlCode = file_get_contents($filePath);

    if ($htmlCode !== false) {
        echo '<pre id="code" style="display: none;" class="code">' . htmlspecialchars($htmlCode) . '</pre>';
    } else {
        echo 'File not found or unable to read.';
    }
    ?>
</div>