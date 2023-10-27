const searchBar = document.getElementById('search-bar');
        
const productCards = document.getElementById('product-cards');

searchBar.addEventListener('input', () => {
    const searchTerm = searchBar.value.toLowerCase();
    
    for (let i = 0; i < productCards.children.length; i++) {
        const card = productCards.children[i];
        
        const productName = card.querySelector('h2').textContent.toLowerCase();
        
        if (productName.includes(searchTerm)) {
            card.style.display = 'inline-block';
        } else {
            card.style.display = 'none';
        }
    }
});