document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const gifContainer = document.getElementById("gif-container");

    searchButton.addEventListener("click", function () {
        const searchTerm = searchInput.value.trim();
        if (searchTerm !== "") {
            searchGifs(searchTerm);
        }
    });

    searchInput.addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            const searchTerm = searchInput.value.trim();
            if (searchTerm !== "") {
                searchGifs(searchTerm);
            }
        }
    });

    async function searchGifs(searchTerm) {
        const apiKey = "kCDYFQq6Rs8ffjrX3bXB87j54B62QgxA";
        const apiUrl = `https://api.giphy.com/v1/gifs/search?api_key=${apiKey}&q=${searchTerm}&limit=10`;

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();
            displayGifs(data.data);
        } catch (error) {
            console.error("Error fetching GIFs:", error);
        }
    }

    function displayGifs(gifs) {
        gifContainer.innerHTML = ""; // Clear previous GIFs
        gifs.forEach(gif => {
            const gifItem = document.createElement("div");
            gifItem.classList.add("gif-item");

            const img = document.createElement("img");
            img.src = gif.images.fixed_height.url;
            img.alt = gif.title;

            gifItem.appendChild(img);
            gifContainer.appendChild(gifItem);
        });
    }
});
