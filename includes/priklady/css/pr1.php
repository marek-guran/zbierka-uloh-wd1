<div class="priklad container card-text">
    <h2>Príklad 1</h2>
    <p>Vytvorte jednoduchú webovú stránku so samostatným css súborom s nasledujúcimi časťami:<br><br>
        <strong>Hlavička (Header)</strong> s názvom webovej stránky a navigačným menu.<br>
        <strong>Hlavný obsah (Main)</strong> obsahujúci článok, 3 obrázky a vložené video z YouTube.<br>
        <strong>Päta (Footer)</strong> s copyright informáciami.
    <p>
</div>

<div class="code-wrapper container code-pill-container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/html + css/pr1.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <div class="code-pill-button-container">
        <button id="show-html-code" class="code-pill-button btn btn-primary">HTML</button>
        <button id="show-css-code" class="code-pill-button btn btn-primary">CSS</button>
    </div>
    <pre id="code" style="display: none;" class="code">
            <pre id="html-code">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sk&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Môj Web&lt;/title&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;pr1.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Vitajte na Mojom Webe&lt;/h1&gt;
        &lt;nav&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Domov&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Články&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Kontakt&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/nav&gt;
    &lt;/header&gt;
    
    &lt;main&gt;
        &lt;article&gt;
            &lt;h2&gt;Nadpis článku&lt;/h2&gt;
            &lt;p&gt;Toto je obsah vášho článku. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
        &lt;/article&gt;
        
        &lt;section class=&quot;images&quot;&gt;
            &lt;img src=&quot;image1.jpg&quot; alt=&quot;Obrázok 1&quot;&gt;
            &lt;img src=&quot;image2.jpg&quot; alt=&quot;Obrázok 2&quot;&gt;
            &lt;img src=&quot;image3.jpg&quot; alt=&quot;Obrázok 3&quot;&gt;
        &lt;/section&gt;
        
        &lt;section class=&quot;video&quot;&gt;
            &lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/VIDEO_ID&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;
        &lt;/section&gt;
    &lt;/main&gt;

    &lt;footer&gt;
        &copy; 2023 Moja Firma
    &lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
<pre id="css-code" style="display: none;">
body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

nav ul {
    list-style-type: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

article {
    margin-bottom: 20px;
}

img {
    max-width: 100%;
    height: auto;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

.video {
    text-align: center;
}</pre>
</div>