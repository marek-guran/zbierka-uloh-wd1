const tableBody = document.getElementById('table-body');
const addForm = document.getElementById('add-form');

let data = [];

function renderTable() {
    tableBody.innerHTML = '';
    data.forEach((item, index) => {
        const row = document.createElement('tr');
        const predmetCell = document.createElement('td');
        const znamkaCell = document.createElement('td');
        const akciaCell = document.createElement('td');
        const deleteButton = document.createElement('button');
        const editButton = document.createElement('button');

        predmetCell.textContent = item.predmet;
        znamkaCell.textContent = item.znamka;
        deleteButton.textContent = 'Odstrániť';
        editButton.textContent = 'Upraviť';

        deleteButton.addEventListener('click', () => {
            data.splice(index, 1);
            renderTable();
        });

        editButton.addEventListener('click', () => {
            const newPredmet = prompt('Zadajte nový názov predmetu:', item.predmet);
            const newZnamka = prompt('Zadajte novú známku:', item.znamka);

            if (newPredmet && newZnamka) {
                data[index].predmet = newPredmet;
                data[index].znamka = newZnamka;
                renderTable();
            }
        });

        akciaCell.appendChild(deleteButton);
        akciaCell.appendChild(editButton);

        row.appendChild(predmetCell);
        row.appendChild(znamkaCell);
        row.appendChild(akciaCell);

        tableBody.appendChild(row);
    });
}

function addItem(predmet, znamka) {
    data.push({ predmet, znamka });
    renderTable();
}

addForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const predmet = event.target.elements.predmet.value;
    const znamka = event.target.elements.znamka.value;
    addItem(predmet, znamka);
    event.target.reset();
});