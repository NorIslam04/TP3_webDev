etudiants=['etu1','etu2','etu3'];

affihcerEtudiant =(etudiants) =>{
    for(etu of etudiants){
        console.log(etu);
    }
}
////////////////////
etu_obj={
    nom: "John",
    prenom: "DOE",
    age:30};

afficherObjEtu= (etu_obj)=> {
    console.log(`nom: ${etu_obj.nom}, prenom:  ${etu_obj.prenom}, Age: ${etu_obj.age}`);
}


/////////////////////

tab_etu=[
    {nom: "John", prenom: "DOE", age:30},
    {nom: "islam", prenom: "Aoudia", age:25},
    {nom: "Jim", prenom: "CARREY", age:50}
]
affihcer_tab_obj= (tab_etu)=>{
    for(obj of tab_etu){
        console.log(`${obj.nom}-${obj.prenom}-${obj.age}`);
    }
}