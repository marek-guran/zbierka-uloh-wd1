const showCodeBtn = document.getElementById('show-code-btn');
const code = document.getElementById('code');

showCodeBtn.addEventListener('click', () => {
    if (code.style.display === 'none') {
        code.style.display = 'block';
        showCodeBtn.textContent = 'Skryť Kód';
    } else {
        code.style.display = 'none';
        showCodeBtn.textContent = 'Ukázať Kód';
    }
});