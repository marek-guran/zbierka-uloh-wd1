const HtmlCodeButton = document.getElementById('show-html-code');
const CssCodeButton = document.getElementById('show-css-code');
const JsCodeButton = document.getElementById('show-js-code');

HtmlCodeButton.classList.add('btn-active');

const buttons = [HtmlCodeButton, CssCodeButton, JsCodeButton];

buttons.forEach(item => {
    item.addEventListener('click', () => {
        buttons.forEach(item => {
            item.classList.remove('btn-active');
        });
        item.classList.add('btn-active');
    });
});