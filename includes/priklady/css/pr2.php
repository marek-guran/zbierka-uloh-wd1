<div class="priklad container card-text">
    <h2>Príklad 2</h2>
    <p>Vytvorte webstránku na ktorej bude animovaný text podľa vášho výberu
    <p>
</div>

<div class="code-wrapper container code-pill-container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/html + css/pr2.html" target="_blank">
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
    &lt;title&gt;Môj Web s Glitch Efektom&lt;/title&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;pr2.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class=&quot;glitch-container&quot;&gt;
        &lt;h1 class=&quot;glitch-text&quot;&gt;Môj Web&lt;/h1&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
<pre id="css-code" style="display: none;">
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #000;
    overflow: hidden;
}

.glitch-container {
    text-align: center;
    position: relative;
    font-size: 80px;
    color: #fff;
}

.glitch-text::before,
.glitch-text::after {
    content: "Môj Web";
    position: absolute;
    top: 0;
    left: 0;
}

.glitch-text::before {
    animation: glitch 1s infinite linear alternate-reverse;
}

.glitch-text::after {
    animation: glitch2 1s infinite linear alternate-reverse;
}

@keyframes glitch {
    0% {
        clip: rect(25px, 9999px, 90px, 0);
    }
    5% {
        clip: rect(45px, 9999px, 90px, 0);
    }
    10% {
        clip: rect(10px, 9999px, 60px, 0);
    }
    15% {
        clip: rect(80px, 9999px, 5px, 0);
    }
    20% {
        clip: rect(10px, 9999px, 100px, 0);
    }
    25% {
        clip: rect(30px, 9999px, 60px, 0);
    }
    30% {
        clip: rect(20px, 9999px, 120px, 0);
    }
    35% {
        clip: rect(10px, 9999px, 40px, 0);
    }
    40% {
        clip: rect(70px, 9999px, 10px, 0);
    }
    45% {
        clip: rect(60px, 9999px, 100px, 0);
    }
    50% {
        clip: rect(25px, 9999px, 10px, 0);
    }
    55% {
        clip: rect(40px, 9999px, 40px, 0);
    }
    60% {
        clip: rect(70px, 9999px, 50px, 0);
    }
    65% {
        clip: rect(35px, 9999px, 50px, 0);
    }
    70% {
        clip: rect(55px, 9999px, 10px, 0);
    }
    75% {
        clip: rect(75px, 9999px, 60px, 0);
    }
    80% {
        clip: rect(15px, 9999px, 90px, 0);
    }
    85% {
        clip: rect(10px, 9999px, 10px, 0);
    }
    90% {
        clip: rect(40px, 9999px, 90px, 0);
    }
    95% {
        clip: rect(10px, 9999px, 50px, 0);
    }
    100% {
        clip: rect(20px, 9999px, 80px, 0);
    }
}

@keyframes glitch2 {
    0% {
        clip: rect(10px, 9999px, 30px, 0);
    }
    5% {
        clip: rect(60px, 9999px, 70px, 0);
    }
    10% {
        clip: rect(40px, 9999px, 50px, 0);
    }
    15% {
        clip: rect(80px, 9999px, 10px, 0);
    }
    20% {
        clip: rect(70px, 9999px, 20px, 0);
    }
    25% {
        clip: rect(30px, 9999px, 60px, 0);
    }
    30% {
        clip: rect(10px, 9999px, 10px, 0);
    }
    35% {
        clip: rect(20px, 9999px, 40px, 0);
    }
    40% {
        clip: rect(80px, 9999px, 20px, 0);
    }
    45% {
        clip: rect(90px, 9999px, 10px, 0);
    }
    50% {
        clip: rect(50px, 9999px, 70px, 0);
    }
    55% {
        clip: rect(40px, 9999px, 20px, 0);
    }
    60% {
        clip: rect(30px, 9999px, 40px, 0);
    }
    65% {
        clip: rect(50px, 9999px, 50px, 0);
    }
    70% {
        clip: rect(20px, 9999px, 40px, 0);
    }
    75% {
        clip: rect(40px, 9999px, 10px, 0);
    }
    80% {
        clip: rect(10px, 9999px, 50px, 0);
    }
    85% {
        clip: rect(30px, 9999px, 60px, 0);
    }
    90% {
        clip: rect(60px, 9999px, 70px, 0);
    }
    95% {
        clip: rect(10px, 9999px, 20px, 0);
    }
    100% {
        clip: rect(70px, 9999px, 10px, 0);
    }
}</pre>
</div>