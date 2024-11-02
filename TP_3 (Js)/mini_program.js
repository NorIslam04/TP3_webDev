i="X"
films =[
    {titre:"film1",annee_sortie:1999,producteur:"islam benwared"},
    {titre:"film2",annee_sortie:2002,producteur:"Abdou dexou"},
    {titre:"film3",annee_sortie:2010,producteur:"ramy scientifique"}
]
nv_film={titre:"XX"+i,annee_sortie:9999,producteur:"XXX"}

add_film=()=>{
    nv_film={titre:"XX"+i,annee_sortie:9999,producteur:"XX"+i}
    films.push(nv_film);
    i+="X";
    affiche_films(films)
}

supp_film=()=>{
    if (films.length != 0) {
        films.shift();
        affiche_films(films)
    } else {
        console.log("n'existe pas les films a supprimer");
    }
}


affiche_films=(films)=>{
    j=false;
    for(let film of films){
        j=true;
        //console.log(`titre: ${film.titre}, annee: ${film.annee_sortie}, producteur: ${film.producteur}`)
        console.log(film)
    }
    if(!j){
        console.log("Liste Des Films Vide !")
    }
    console.log("-------------------------------------")

}
