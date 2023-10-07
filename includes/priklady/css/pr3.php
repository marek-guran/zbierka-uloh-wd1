<div class="priklad container card-text">
    <h2>Príklad 3</h2>
    <p>Vytvorte webstránku na ktorej bude animovaná lopta, ktorá sa bude hýbať stále dookola po okraji obrazovky. Lopta nesmie zájsť mimo obrazovku.
    <p>
</div>

<div class="code-wrapper container">
    <button id="show-code-btn" class="btn btn-primary">Ukázať Kód</button>
    <a href="../priklady/html + css/pr3.html" target="_blank">
        <button class="btn btn-primary" style="margin-left: 5px;">Výsledná Stránka</button>
    </a>
    <pre id="code" style="display: none;" class="code">
<h2>HTML</h2>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;sk&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;Animovaná Lopta&lt;/title&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;pr3.css&quot;&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class=&quot;ball&quot;&gt;&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

<h2>CSS</h2>
body {
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f0f0f0;
}

.ball {
    width: 50px;
    height: 50px;
    background-color: #000000;
    border-radius: 50%;
    position: absolute;
    animation: moveBall 4s linear infinite;
}

@keyframes moveBall {
    0% {
        top: 0;
        left: 0;
    }
    25% {
        top: 0;
        left: calc(100% - 50px);
    }
    50% {
        top: calc(100% - 50px);
        left: calc(100% - 50px);
    }
    75% {
        top: calc(100% - 50px);
        left: 0;
    }
    100% {
        top: 0;
        left: 0;
    }
}</pre>
</div>