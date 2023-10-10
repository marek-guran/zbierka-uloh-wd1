<div class="priklad container card-text">
    <h2>Príklad 1</h2>
    <p>Vašou úlohou je vytvoriť webovú stránku s názvom "Príklad 1" pomocou HTML kódu. Stránka by mala obsahovať
        nasledujúci obsah a štruktúru:<br><br>
        <strong>Názov stránky:</strong> Príklad 1<br>
        <br>
        <strong>Hlavička:</strong><br>
        Nadpis úrovne 1: Základy HTML<br>
        <br>
        <strong>Navigačný panel:</strong><br>
        Zoznam s odkazmi na sekcie:<br>
        Sekcia 1: Úvod do HTML<br>
        Sekcia 2: HTML Elementy<br>
        Sekcia 3: Vytváranie odkazov<br>
        <br>
        <strong>Obsah stránky:</strong><br>
        Sekcia 1: Úvod do HTML<br>
        Nadpis úrovne 2: Sekcia 1: Úvod do HTML<br>
        Text: "HTML (Hypertext Markup Language) je štandardným jazykom na vytváranie webových stránok. Je dôležité
        porozumieť základom HTML pre vytváranie obsahu na webu.<br>
        <br>
        Sekcia 2: HTML Elementy<br>
        Nadpis úrovne 2: Sekcia 2: HTML Elementy<br>
        Text: V HTML používate elementy na štruktúrovanie vášho obsahu. Tu sú niektoré často používané elementy:<br>
        Nadpisy pre tituly a hlavičky: &lt;h1&gt; - &lt;h6&gt;<br>
        Odseky pre text: &lt;p&gt;<br>
        Zlomy riadkov pre nové riadky: &lt;br&gt;<br>
        Odkazy na iné webové stránky: &lt;a&gt;<br>
        <br>
        Sekcia 3: Vytváranie odkazov<br>
        Nadpis úrovne 2: Sekcia 3: Vytváranie odkazov<br>
        Text: Odkazy sú dôležité pre navigáciu. Tu je, ako vytvoriť odkaz:<br>
        Príklad odkazu: &lt;a href="https://www.example.com">Navštíviť example.com&lt;/a&gt;<br>
        <br>
        <strong>Päta stránky:</strong><br>
        Copyright: © 2023 webstranka.sk<br><br>
        Vaša webová stránka by mala vyzerať a fungovať podľa uvedeného popisu. Použite HTML na vytvorenie tejto
        stránky. Uistite sa, že ste správne implementovali všetky nadpisy, odseky, odkazy a ďalšie časti kódu.<br>

    <p>
</div>

<div class="code-wrapper container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/html/pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <?php
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    $filePath = $documentRoot . '/priklady/html/pr1.html';
    $htmlCode = file_get_contents($filePath);

    if ($htmlCode !== false) {
        echo '<pre id="code" style="display: none;" class="code">' . htmlspecialchars($htmlCode) . '</pre>';
    } else {
        echo 'File not found or unable to read.';
    }
    ?>
</div>