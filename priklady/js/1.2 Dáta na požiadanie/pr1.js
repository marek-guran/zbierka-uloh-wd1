document.addEventListener("DOMContentLoaded", function () {
    const loadDataButton = document.getElementById("loadData");
    const dataDiv = document.getElementById("data");

    loadDataButton.addEventListener("click", function () {
        if (this.classList.contains('clicked')) {
            // If data is currently shown, hide it and change button text
            this.classList.remove('clicked');
            this.textContent = 'Načítať dáta';
            dataDiv.style.display = 'none';
        } else {
            // If data is currently hidden, show it and change button text
            const xhr = new XMLHttpRequest();

            xhr.open("GET", "pr1.json", true);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    dataDiv.innerHTML = `<p>Meno: ${response.meno}</p><p>Povolanie: ${response.povolanie}</p>`;
                    dataDiv.style.display = 'block';
                } else {
                    dataDiv.innerHTML = "Nastala chyba pri načítaní dát.";
                }
            };

            xhr.send();

            this.classList.add('clicked');
            this.textContent = 'Skryť';
        }
    });
});