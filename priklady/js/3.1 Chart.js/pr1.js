function createLineChart(data) {
    const ctx = document.getElementById('chart').getContext('2d');
    
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: data.map(item => item.year),
            datasets: [{
                label: 'Hodnoty',
                data: data.map(item => item.value),
                borderColor: 'blue',
                fill: false,
            }],
        },
    });
}

document.addEventListener('DOMContentLoaded', () => {
    fetch('pr1.json')
        .then(response => response.json())
        .then(data => createLineChart(data))
        .catch(error => console.error('Error loading JSON data:', error));
});
