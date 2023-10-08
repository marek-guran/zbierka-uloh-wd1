const showHtmlCodeButton = document.getElementById('show-html-code');
const showCssCodeButton = document.getElementById('show-css-code');
const htmlCode = document.getElementById('html-code');
const cssCode = document.getElementById('css-code');
const showCodeBtn = document.getElementById('show-code-btn');
const code = document.getElementById('code');

showHtmlCodeButton.style.display = 'none';
showCssCodeButton.style.display = 'none';

showHtmlCodeButton.addEventListener('click', () => {
    htmlCode.style.display = 'block';
    cssCode.style.display = 'none';
});

showCssCodeButton.addEventListener('click', () => {
    cssCode.style.display = 'block';
    htmlCode.style.display = 'none';
});

showCodeBtn.addEventListener('click', () => {
    if (code.style.display === 'none') {
        code.style.display = 'block';
        showCodeBtn.textContent = 'Skryť Kód';
        showHtmlCodeButton.style.display = 'inline-block';
        showCssCodeButton.style.display = 'inline-block';
    } else {
        code.style.display = 'none';
        showCodeBtn.textContent = 'Ukázať Kód';
        showHtmlCodeButton.style.display = 'none';
        showCssCodeButton.style.display = 'none';
    }
});