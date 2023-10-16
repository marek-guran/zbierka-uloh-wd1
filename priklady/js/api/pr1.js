document.addEventListener("DOMContentLoaded", function() {
    const dataContainer = document.getElementById("data-container");

    fetch("pr1.json")
        .then(response => response.json())
        .then(data => {
            dataContainer.innerHTML = `
                <p>${data.welcomeMessage}</p>
                <p>${data.content}</p>
            `;
        })
        .catch(error => {
            console.error("Nastala chyba pri načítaní json súboru:", error);
            dataContainer.innerHTML = "Chyba pri čítaní dát.";
        });
});
