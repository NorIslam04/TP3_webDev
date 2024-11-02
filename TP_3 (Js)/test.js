person1={
    name: "islam",
    prenom:"Aoudia",
    age: 20,
    sport:["foot","tennis"],
    address: {
        city: "Tunis",
        street: "Rue de la liberté",
        code: 1000
    }
}

person2={
    name: "ahmed",
    prenom:"Aoudia",
    age: 20,
}

person3={   
    name: "mohamed",
    prenom:"Aoudia",
    age: 20,
}

tab = [person1,person2,person3]


tab1 = [
    person1={
        name: "islam",
        prenom:"Aoudia",
        age: 20,
    },
    
    person2={
        name: "ahmed",
        prenom:"Aoudia",
        age: 20,
    },
    
    person3={   
        name: "mohamed",
        prenom:"Aoudia",
        age: 20,
    }

]
tab1.forEach(person => {
    console.log(person)
});