<div class="priklad container card-text">
    <h2>Príklad 2</h2>
    <p>
    Vašou úlohou je vytvoriť webstránku s multimediálnymi prvkami. Dodržte nasledujúce inštrukcie na zahrnutie týchto prvkov do vášho HTML kódu:<br>
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
Vytvorte alebo nájdite malý obrázok, ktorý bude reprezentovať vašu webovú stránku. Tento obrázok bude použitý ako favicon, ktorý sa zobrazuje v kartách prehliadača.<br>
Obrázok favicon uložte vo vhodnom formáte (napríklad .ico, .png).<br>
Favicon pridajte na svoju webovú stránku pomocou značky &lt;link&gt; v časti &lt;head&gt;.<br>
<br>
<strong>Zvuk:</strong><br>
Vložte na svoju webovú stránku zvukový element. Môžete použiť HTML5 značku &lt;audio&gt;.<br>
Pridajte audio súbor (napríklad .mp3 alebo .ogg) do vášho projektu a odkážte sa naň vo vašom HTML kóde.<br>
Poskytnite ovládanie pre prehrávanie a pozastavenie zvuku.
    <p>
</div>

<div class="code-wrapper container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/iba html/pr2.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <pre id="code" style="display: none;" class="code">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sk&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Príklad 2&lt;/title&gt;
    &lt;link rel=&quot;icon&quot; href=&quot;favicon.ico&quot; type=&quot;image/x-icon&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Základy HTML&lt;/h1&gt;
    &lt;/header&gt;

    &lt;main&gt;
        &lt;section id=&quot;images&quot;&gt;
            &lt;h2&gt;Obrázky&lt;/h2&gt;
            &lt;img src=&quot;image1.jpg&quot; alt=&quot;Prvý obrázok&quot;&gt;
            &lt;img src=&quot;image2.jpg&quot; alt=&quot;Druhý obrázok&quot;&gt;
        &lt;/section&gt;

        &lt;section id=&quot;video&quot;&gt;
            &lt;h2&gt;Video&lt;/h2&gt;
            &lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/VIDEO_ID&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;
        &lt;/section&gt;

        &lt;section id=&quot;audio&quot;&gt;
            &lt;h2&gt;Zvuk&lt;/h2&gt;
            &lt;audio controls&gt;
                &lt;source src=&quot;audio.mp3&quot; type=&quot;audio/mpeg&quot;&gt;
                Váš webový prehliadač nepodporuje prehrávanie zvuku.
            &lt;/audio&gt;
        &lt;/section&gt;
    &lt;/main&gt;

    &lt;footer&gt;
        &lt;p&gt;&copy; 2023 webstranka.sk&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
</div>