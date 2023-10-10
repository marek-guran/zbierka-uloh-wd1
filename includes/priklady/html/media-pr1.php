<div class="priklad container card-text">
    <h2>Médiá (obrázky, videá, zvukové stopy)</h2>
    <p>
        Vašou úlohou je vytvoriť webstránku s multimediálnymi prvkami. Dodržte nasledujúce inštrukcie na zahrnutie
        týchto prvkov do vášho HTML kódu:<br>
        <br>
        <strong>Obrázky:</strong><br>
        Pridajte aspoň dva obrázky na svoju webovú stránku.<br>
        Použite značku &lt;img&gt;, aby ste obrázky vložili do vášho HTML.<br>
        Pre každý obrázok uveďte atribút alt na poskytnutie alternatívneho textu.<br>
        <br>
        <strong>Videá:</strong><br>
        Vložte video na svoju webovú stránku. Môžete použiť online video hostingovú službu ako YouTube alebo Vimeo.<br>
        Na vloženie videa na svoju stránku použite značky &lt;iframe&gt; alebo &lt;video&gt;.<br>
        Uistite sa, že poskytnete krátky popis alebo titulok k videu.<br>
        <br>
        <strong>Ikona webovej stránky (Favicon):</strong><br>
        Vytvorte alebo nájdite malý obrázok, ktorý bude reprezentovať vašu webovú stránku. Tento obrázok bude použitý
        ako favicon, ktorý sa zobrazuje v kartách prehliadača.<br>
        Obrázok favicon uložte vo vhodnom formáte (.ico).<br>
        <br>
        <strong>Zvuk:</strong><br>
        Vložte na svoju webovú stránku zvukový element. Môžete použiť HTML5 značku &lt;audio&gt;.<br>
        Pridajte audio súbor (napríklad .mp3 alebo .ogg) do vášho projektu a odkážte sa naň vo vašom HTML kóde.<br>
        Poskytnite ovládanie pre prehrávanie a pozastavenie zvuku. A ak zariadenie nepodporuje túto funkcionalitu,
        napíšte používateľovi chybnú hlášku.
    <p>
    <p><strong>Výsledná stránka by mala vyzerať približne takto:</strong>
    <p>
    <div class="img-container">
        <a href="../img/priklady/html/media-pr1.png" target="_blank">
            <img src="../img/priklady/html/media-pr1.png" alt="Zadanie príkladu" class="img-zadania">
            <div class="img-overlay">
                <i class="fas fa-image"></i>
            </div>
        </a>
    </div>
</div>

<div class="code-wrapper container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/html/media-pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <?php
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    $filePath = $documentRoot . '/priklady/html/media-pr1.html';
    $htmlCode = file_get_contents($filePath);

    if ($htmlCode !== false) {
        echo '<pre id="code" style="display: none;" class="code">' . htmlspecialchars($htmlCode) . '</pre>';
    } else {
        echo 'File not found or unable to read.';
    }
    ?>
</div>