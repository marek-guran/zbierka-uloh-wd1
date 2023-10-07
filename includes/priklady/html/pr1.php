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
    <a href="../priklady/iba html/pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <pre id="code" style="display: none;" class="code">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sk&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Príklad 1&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Základy HTML&lt;/h1&gt;
    &lt;/header&gt;
    
    &lt;nav&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href=&quot;#section1&quot;&gt;Sekcia 1: Úvod do HTML&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#section2&quot;&gt;Sekcia 2: HTML Elementy&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#section3&quot;&gt;Sekcia 3: Vytváranie odkazov&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;

    &lt;main&gt;
        &lt;section id=&quot;section1&quot;&gt;
            &lt;h2&gt;Sekcia 1: Úvod do HTML&lt;/h2&gt;
            &lt;p&gt;HTML (Hypertext Markup Language) je štandardným jazykom na vytváranie webových stránok. Je dôležité porozumieť základom HTML pre vytváranie obsahu na webu.&lt;/p&gt;
        &lt;/section&gt;

        &lt;section id=&quot;section2&quot;&gt;
            &lt;h2&gt;Sekcia 2: HTML Elementy&lt;/h2&gt;
            &lt;p&gt;V HTML používate elementy na štruktúrovanie vášho obsahu. Tu sú niektoré často používané elementy:&lt;/p&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;strong&gt;&amp;amp;lt;h1&amp;amp;gt; - &amp;amp;lt;h6&amp;amp;gt;&lt;/strong&gt;: Nadpisy pre tituly a hlavičky&lt;/li&gt;
                &lt;li&gt;&lt;strong&gt;&amp;amp;lt;p&amp;amp;gt;&lt;/strong&gt;: Odseky pre text&lt;/li&gt;
                &lt;li&gt;&lt;strong&gt;&amp;amp;lt;br&amp;amp;gt;&lt;/strong&gt;: Zlomy riadkov pre nové riadky&lt;/li&gt;
                &lt;li&gt;&lt;strong&gt;&amp;amp;lt;a&amp;amp;gt;&lt;/strong&gt;: Odkazy na iné webové stránky&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/section&gt;

        &lt;section id=&quot;section3&quot;&gt;
            &lt;h2&gt;Sekcia 3: Vytváranie odkazov&lt;/h2&gt;
            &lt;p&gt;Odkazy sú dôležité pre navigáciu. Tu je príklad, ako vytvoriť odkaz:&lt;/p&gt;
            &lt;p&gt;&lt;code&gt;&amp;amp;lt;a href=&quot;https://www.example.com&quot;&amp;amp;gt;Navštíviť example.com&amp;amp;lt;/a&amp;amp;gt;&lt;/code&gt;&lt;/p&gt;
            &lt;a href=&quot;https://www.example.com&quot;&gt;Navštíviť example.com&lt;/a&gt;
        &lt;/section&gt;
    &lt;/main&gt;

    &lt;footer&gt;
        &lt;p&gt;&amp;copy; 2023 webstranka.sk&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
</div>