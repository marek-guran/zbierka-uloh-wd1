const showHtmlCodeButton = document.getElementById('show-html-code');
const showCssCodeButton = document.getElementById('show-css-code');
const showJsCodeButton = document.getElementById('show-js-code');
const htmlCode = document.getElementById('html-code');
const cssCode = document.getElementById('css-code');
const jsCode = document.getElementById('js-code');
const showCodeBtn = document.getElementById('show-code-btn');
const code = document.getElementById('code');

showHtmlCodeButton.style.display = 'none';
showCssCodeButton.style.display = 'none';
showJsCodeButton.style.display = 'none';

showHtmlCodeButton.addEventListener('click', () => {
    htmlCode.style.display = 'block';
    cssCode.style.display = 'none';
    jsCode.style.display = 'none';
});

showCssCodeButton.addEventListener('click', () => {
    cssCode.style.display = 'block';
    htmlCode.style.display = 'none';
    jsCode.style.display = 'none';
});

showJsCodeButton.addEventListener('click', () => {
    jsCode.style.display = 'block';
    cssCode.style.display = 'none';
    htmlCode.style.display = 'none';
});

showCodeBtn.addEventListener('click', () => {
    if (code.style.display === 'none') {
        code.style.display = 'block';
        showCodeBtn.textContent = 'Skryť Kód';
        showHtmlCodeButton.style.display = 'inline-block';
        showCssCodeButton.style.display = 'inline-block';
        showJsCodeButton.style.display = 'inline-block';
    } else {
        code.style.display = 'none';
        showCodeBtn.textContent = 'Ukázať Kód';
        showHtmlCodeButton.style.display = 'none';
        showCssCodeButton.style.display = 'none';
        showJsCodeButton.style.display = 'none';
    }
});