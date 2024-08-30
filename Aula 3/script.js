function calcularMediaAluno() {
    const rows = document.querySelectorAll('tr.line');
    const MediaAluno = document.getElementsByClassName('MediaAluno');
    if(MediaAluno.length === 0){
        rows.forEach(row => {
            const tds = row.querySelectorAll('td:not(:first-child)');

            let sum = 0;
            let count = 0;
            tds.forEach(td => {
                sum += parseFloat(td.textContent.replace(',', '.'));
                count++;
            });
            const media = (sum / count).toFixed(2).replace('.', ','); // Média formatada
            const tdMedia = document.createElement('td');
            tdMedia.textContent = media;
            tdMedia.className = 'MediaAluno';
            row.appendChild(tdMedia);
        });
    }
}


function calcularMediaNotas() {
    const table = document.getElementById('myTable');
    const tbody = table.querySelector('tbody');
    const columnCount = table.rows[1].cells.length;

    const existingAvgRow = document.querySelector('.mediaRow');
    if (existingAvgRow) {
        existingAvgRow.remove();
    }

    const avgRow = document.createElement('tr');
    avgRow.className = 'mediaRow';

    const emptyCell = document.createElement('td');
    emptyCell.textContent = 'Média';
    avgRow.appendChild(emptyCell);
    console.log(columnCount)
    for (let col = 1; col <= columnCount; col++) {
        let sum = 0;
        let count = 0;

        for (let row = 0; row < tbody.rows.length; row++) {
            const cellValue = parseFloat(tbody.rows[row].cells[col].textContent.replace(',', '.'));

            if (!isNaN(cellValue)) {
                sum += cellValue;
                count++;
            }
        }

        const avg = (sum / count).toFixed(2).replace('.', ',');
        const avgCell = document.createElement('td');
        avgCell.textContent = avg;

        avgRow.appendChild(avgCell);
    }
    tbody.appendChild(avgRow);
}
