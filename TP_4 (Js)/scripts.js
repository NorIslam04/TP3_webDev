add_row = () => {
    let table = document.getElementsByTagName('tbody')[0];
    let newRow = table.insertRow();
    newRow.classList.add('tr'); // Ajout de la classe "tr" à la nouvelle ligne
    for (let i = 0; i < 5; i++) {
        let newCell = newRow.insertCell();
        newCell.textContent = 'x';
    }
};
