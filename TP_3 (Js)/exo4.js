tab_etu=[
    {id:1000, nom:"islam", prenom:"aoudia", note: 16},
    {id:1001, nom:"walid", prenom:"benali", note: 7},
    {id:1001, nom:"aziz", prenom:"fezi", note: 12}

]

est_admis =(note)=>{
    if(note<10){
        return 'AJOURNE';
    }else{
        return "ADMIS";
    }
}

delebiration = (tab_etu)=>{
    for(etu of tab_etu){
        console.log(`${etu.id}: ${est_admis(etu.note)}`)
    }

}