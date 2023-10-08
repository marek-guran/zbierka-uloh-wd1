<div class="priklad container card-text">
    <h2>Príklad 4</h2>
    <p>Vytvorte webstránku na ktorej bude menu s animovaným prechodom farebného pozadia, keď prejdeme myšou ponad každé menu
    <p>
</div>

<div class="code-wrapper container code-pill-container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/html + css/pr4.html" target="_blank">
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
    &lt;title&gt;Menu s ikonami&lt;/title&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;pr4.css&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;nav&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fas fa-home&quot;&gt;&lt;/i&gt; Domov&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fas fa-info-circle&quot;&gt;&lt;/i&gt; O nás&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fas fa-briefcase&quot;&gt;&lt;/i&gt; Služby&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fas fa-envelope&quot;&gt;&lt;/i&gt; Kontakt&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
<pre id="css-code" style="display: none;">
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
}

nav li {
    margin: 10px;
    text-align: center;
}

nav a {
    text-decoration: none;
    color: #333;
    font-size: 20px;
    display: flex;
    align-items: center;
    transition: all 0.3s ease-in-out;
    padding: 5px;
}

nav a i {
    margin-right: 10px;
    font-size: 24px;
    transition: opacity 0.3s ease-in-out;
}

nav a:hover {
    background-color: #3498db;
    color: #fff;
}

nav a:hover i {
    opacity: 1;
}

nav a::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0%;
    height: 100%;
    background-color: #3498db;
    z-index: -1;
    transition: width 0.3s ease-in-out;
}

nav a:hover::before {
    width: 100%;
}</pre>
</div>