document.addEventListener("DOMContentLoaded", function () {
    const loadDataButton = document.getElementById("loadData");
    const dataDiv = document.getElementById("data");

    loadDataButton.addEventListener("click", function () {
        const xhr = new XMLHttpRequest();

        xhr.open("GET", "pr1.json", true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                dataDiv.innerHTML = `<p>Meno: ${response.meno}</p><p>Povolanie: ${response.povolanie}</p>`;
            } else {
                dataDiv.innerHTML = "Nastala chyba pri načítaní dát.";
            }
        };

        xhr.send();
    });
});
