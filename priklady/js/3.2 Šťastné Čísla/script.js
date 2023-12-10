function generateGraph() {
    $.ajax({
        url: 'data.json',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            const xValues = data.xValues;
            const yValues = data.yValues;

            const trace = {
                x: xValues,
                y: yValues,
                type: 'line',
            };

            const layout = {
                title: 'Šťastné Čísla',
                xaxis: {
                    title: 'X-axis Label',
                },
                yaxis: {
                    title: 'Y-axis Label',
                },
            };

            Plotly.newPlot('chart-container', [trace], layout);
        },
        error: function () {
            alert('Failed to fetch data from the JSON file. Please try again.');
        }
    });
}
