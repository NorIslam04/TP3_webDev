const addRow = () => {
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const point = document.getElementById('point').value;

    if (!nom || !prenom || isNaN(point)) {
        alert("Veuillez remplir tous les champs correctement.");
        return;
    }

    fetch("add.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ nom, prenom, point }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                fetchTable();
                clearInput();
            } else {
                alert("Erreur : " + data.message);
            }
        });
};

const fetchTable = () => {
    fetch("fetch.php")
        .then((response) => response.json())
        .then((data) => {
            const tbody = document.getElementById("studentTable");
            tbody.innerHTML = ""; // Efface les lignes existantes

            data.forEach((student, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${student.nom}</td>
                    <td>${student.prenom}</td>
                    <td>${student.point}</td>
                    <td><input type="checkbox" data-id="${student.id}"></td>
                    <td>
                        <button onclick="redirectToEdit(${student.id}, '${student.nom}', '${student.prenom}', ${student.point})">
                            Modifier
                        </button>
                    </td>
                `;
                tbody.appendChild(row);
            });
        });
};


const deleteRows = () => {
    const checkboxes = document.querySelectorAll("#studentTable input[type='checkbox']:checked");
    const ids = Array.from(checkboxes).map((checkbox) => checkbox.dataset.id);

    if (ids.length === 0) {
        alert("Veuillez sélectionner au moins une ligne à supprimer.");
        return;
    }

    fetch("delete.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ ids }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                fetchTable();
            } else {
                alert("Erreur : " + data.message);
            }
        });
};

const clearInput = () => {
    document.getElementById('nom').value = '';
    document.getElementById('prenom').value = '';
    document.getElementById('point').value = '';
};

// Charger les données au démarrage
document.addEventListener("DOMContentLoaded", fetchTable);

const redirectToEdit = (id, nom, prenom, point) => {
    const url = `edit.php?id=${id}&nom=${encodeURIComponent(nom)}&prenom=${encodeURIComponent(prenom)}&point=${point}`;
    window.location.href = url;
};

