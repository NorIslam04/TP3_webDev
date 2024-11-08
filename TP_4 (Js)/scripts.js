document.addEventListener('DOMContentLoaded', (event) => {
    init();
});


let etudiant =[
    {
        nom: 'Diallo',
        prenom: 'Mamadou',
        point: 15
    },
    {
        nom: 'Aoudia',
        prenom: 'Islam',
        point: 18
    },
    {
        nom: 'benali',
        prenom: 'Walid',
        point: 12
    },
    

];

var id=148976;
init= () => {
    tbody = document.getElementsByTagName('tbody')[0];
    for (let i = 0; i < etudiant.length; i++) {
        id++;
        let newRow = tbody.insertRow();
        newRow.classList.add('tr'); // Ajout de la classe "tr" à la nouvelle ligne

        let idCell = newRow.insertCell();
        idCell.textContent = id;

        let nomCell = newRow.insertCell();
        nomCell.textContent = etudiant[i].nom;
        
        let prenomCell = newRow.insertCell();
        prenomCell.textContent = etudiant[i].prenom;
        
        let pointCell = newRow.insertCell();
        pointCell.textContent = etudiant[i].point;

        let selectCell = newRow.insertCell();
        let checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        selectCell.appendChild(checkbox);
    }
    updat();
};


add_row = () => {

    let name = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let point =document.getElementById('point').value;


    if (name === '' || prenom === '' || point === '') {
        alert('Please fill in all fields');
        return;
    }
    if(isNaN(point)){
        alert('Please enter a number');
        return
    }

    let tbody = document.getElementsByTagName('tbody')[0];
    let newRow = tbody.insertRow();
    newRow.classList.add('tr'); // Ajout de la classe "tr" à la nouvelle ligne
    id++;
    let idCell = newRow.insertCell();
    idCell.textContent = id;
    let nomCell = newRow.insertCell();
    nomCell.textContent = name;
    
    let prenomCell = newRow.insertCell();
    prenomCell.textContent = prenom;
    
    let pointCell = newRow.insertCell();
    pointCell.textContent = point;

    let selectCell = newRow.insertCell();
    let checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    selectCell.appendChild(checkbox);

    etudiant.push({ nom: name, prenom: prenom, point: parseInt(point) });
    updat();
    clear_input();
};

console_tableau =(etudiant) => {
    console.log(etudiant);
}

updat = ()=>{
    let lignes = document.getElementById('lignes');
    let sum = document.getElementById('sum');
    let varsum = 0;
    let varligne = 0;
    for (let i = 0; i < etudiant.length; i++) {
        varsum += etudiant[i].point;
        varligne += 1;
    }
    lignes.innerHTML ='linges= ' + varligne;
    sum.innerHTML ='Sum Points= ' + varsum;
};

delete_row = () => {
    let ischecked=false;
    if (etudiant.length === 0) {
        alert('No rows to delete');
        return;
    }
    let tbody = document.getElementsByTagName('tbody')[0];
    for (let i = 0; i < tbody.children.length; i++) {
        
        if (tbody.children[i].children[4].children[0].checked) {
            tbody.children[i].remove();
            etudiant.splice(i, 1);
            i--;
            ischecked=true;
        }
    }
    if(!ischecked){
        alert('Please select a row to delete');
    }
    updat();
};

clear_input = () => {
    document.getElementById('nom').value = '';
    document.getElementById('prenom').value = '';
    document.getElementById('point').value = '';
}