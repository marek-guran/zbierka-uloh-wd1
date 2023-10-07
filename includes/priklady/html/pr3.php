<div class="priklad container card-text">
    <h2>Príklad 3</h2>
    <p>Vašou úlohou je vytvoriť novú webovú stránku, ktorá obsahuje formuláre. Postupujte podľa nasledujúcich krokov:<br><br>
        <strong>Názov stránky:</strong> Príklad 3<br>
        <br>
        <strong>Hlavička:</strong> Vložte nadpis úrovne 1 s názvom vašej stránky do hlavičky.<br>
        <br>
<strong>Formulár 1:</strong> Kontaktujte nás:<br>
Vytvorte formulár, ktorý umožní používateľom kontaktovať vás. Formulár by mal obsahovať tieto polia:<br>
Meno a priezvisko (textové pole)<br>
Email (textové pole pre email)<br>
Správa (textové pole alebo textové pole s veľkým textovým obsahom)<br>
Pridajte tlačidlo s textom "Odoslať". Po stlačení tlačidla by mali údaje z formulára byť odoslané na server.<br>
<br>
<strong>Formulár 2:</strong> Prihlásenie:<br>
Vytvorte druhý formulár, ktorý slúži na prihlásenie používateľov. Formulár by mal obsahovať tieto polia:<br>
Používateľské meno (textové pole)<br>
Heslo (textové pole so skrytými znakmi)<br>
Pridajte tlačidlo s textom "Prihlásiť sa".<br>
<strong>Päta stránky:</strong> Pridajte pätu stránky, ktorá obsahuje váš kontakt (napríklad emailovú adresu alebo telefónne číslo) a autorské práva.
    <p>
</div>

<div class="code-wrapper container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/iba html/pr3.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <pre id="code" style="display: none;" class="code">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sk&quot;&gt;

&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Kontaktný formulár&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Kontaktný formulár&lt;/h1&gt;
    &lt;/header&gt;

    &lt;section id=&quot;kontakt-formular&quot;&gt;
        &lt;h2&gt;Kontaktujte nás&lt;/h2&gt;
        &lt;form id=&quot;kontakt-form&quot; onsubmit=&quot;return validateKontaktForm()&quot;&gt;
            &lt;label for=&quot;meno&quot;&gt;Meno a priezvisko:&lt;/label&gt;
            &lt;input type=&quot;text&quot; id=&quot;meno&quot; required&gt;

            &lt;label for=&quot;email&quot;&gt;Email:&lt;/label&gt;
            &lt;input type=&quot;email&quot; id=&quot;email&quot; required&gt;

            &lt;label for=&quot;sprava&quot;&gt;Správa:&lt;/label&gt;
            &lt;textarea id=&quot;sprava&quot; rows=&quot;4&quot; required&gt;&lt;/textarea&gt;

            &lt;button type=&quot;submit&quot;&gt;Odoslať&lt;/button&gt;
        &lt;/form&gt;
    &lt;/section&gt;

    &lt;section id=&quot;prihlasenie&quot;&gt;
        &lt;h2&gt;Prihlásenie&lt;/h2&gt;
        &lt;form id=&quot;prihlasovaci-formular&quot; onsubmit=&quot;return validatePrihlasovaciForm()&quot;&gt;
            &lt;label for=&quot;pouzivatel&quot;&gt;Používateľské meno:&lt;/label&gt;
            &lt;input type=&quot;text&quot; id=&quot;pouzivatel&quot; required&gt;

            &lt;label for=&quot;heslo&quot;&gt;Heslo:&lt;/label&gt;
            &lt;input type=&quot;password&quot; id=&quot;heslo&quot; required&gt;

            &lt;button type=&quot;submit&quot;&gt;Prihlásiť sa&lt;/button&gt;
        &lt;/form&gt;
    &lt;/section&gt;

    &lt;footer&gt;
        &lt;p&gt;&copy; 2023 Vaša webová stránka&lt;/p&gt;
        &lt;p&gt;Kontakt: info@vasawebovastranka.sk&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;

&lt;/html&gt;</pre>
</div>