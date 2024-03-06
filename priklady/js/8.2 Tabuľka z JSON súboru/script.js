document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("file-input").addEventListener("change", handleFileSelect);

    function handleFileSelect(event) {
        const file = event.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = function (event) {
            try {
                const data = JSON.parse(event.target.result);
                createTable(data);
            } catch (error) {
                console.error('Error parsing JSON file:', error);
            }
        };
        reader.readAsText(file);
    }

    function createTable(data) {
        const tableElement = document.getElementById("example-table");
        tableElement.innerHTML = "";

        const table = document.createElement('table');
        const thead = document.createElement('thead');
        const tbody = document.createElement('tbody');

        const headersRow = document.createElement('tr');
        data.headers.forEach(header => {
            const th = document.createElement('th');
            th.textContent = header;
            headersRow.appendChild(th);
        });
        thead.appendChild(headersRow);

        data.data.forEach(rowData => {
            const tr = document.createElement('tr');
            rowData.forEach(cellData => {
                const td = document.createElement('td');
                td.textContent = cellData;
                tr.appendChild(td);
            });
            tbody.appendChild(tr);
        });

        table.appendChild(thead);
        table.appendChild(tbody);
        tableElement.appendChild(table);

        tableElement.classList.add('fade-in');
        setTimeout(() => {
            tableElement.classList.remove('fade-in');
        }, 1000);
    }
});
