document.addEventListener('DOMContentLoaded', () => {
    // Get the search input and clear button elements
    const searchInput = document.getElementById('search-input');
    const clearSearchBtn = document.getElementById('clear-search-btn');

    // Get all the card elements
    const cardCols = document.querySelectorAll('.cardcontainer');

    // Add event listener to the search input
    searchInput.addEventListener('input', () => {
        // Get the search query
        const searchQuery = searchInput.value.trim().toLowerCase();

        // Filter the card elements that match the search query
        const filteredCardCols = Array.from(cardCols).filter(cardCol => {
            const cardTitle = cardCol.querySelector('.card-title');
            return cardTitle && cardTitle.textContent.toLowerCase().includes(searchQuery);
        });

        // Loop through all the card elements
        cardCols.forEach(cardCol => {
            // Check if the card element is in the filtered array
            if (filteredCardCols.includes(cardCol)) {
                // Show the card element
                cardCol.style.display = 'block';
            } else {
                // Hide the card element
                cardCol.style.display = 'none';
            }
        });
    });

    // Add event listener to the clear button
    clearSearchBtn.addEventListener('click', () => {
        // Clear the search input
        searchInput.value = '';

        // Show all the card elements
        cardCols.forEach(cardCol => {
            cardCol.style.display = 'block';
        });
    });
});