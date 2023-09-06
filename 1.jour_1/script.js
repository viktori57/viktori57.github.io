let Autruche = "Animal"
var Perche = "poisson"
// let et var permet de dire que je creer une variable
// d'un nom souhaité
// j'ai défini des variables de type "string"
// (Chaine de caractère)
let NombreStagiaire = 10
// J'ai défini une variable avec le nom NombreStagiaire
// Et je lui ai donner comme donnée le nombre 10
// J'ai défini une variable de type int (nombre entier)
var heure = 14.31
// J'ai créer une variable avec le nom heure
// Je lui est donner la donnée 14.31
// J'ai défini une variable de type float/double
// (Nombre à virgule)
let Allumer = true
// J'ai créer une variable avec le nom Allumer
// Et comme valeur je lui est donner true (vrai)
// Le type de cette est Boolean (true/false)
var Ventilo = null
// J'ai créer une variable avec le nom ventilo
// avec comme valeur null qui est rien du tout
// Le type est null
let Phrase = "j'aime l' " + Autruche +
" mais pas les " + Perche
// J'aime l'animal mais pas les poissons
// J'ai concaténer les chaines de caractères
// et les variables
var calcul = heure + NombreStagiaire // / * % -
// 14.31 + 10

console.log(Phrase)
console.log(calcul)
// Permet d'afficher une valeur donnée dans la console du navigateur

// Je créer une fonction qui se nomme horloge sans
// paramètre temps
var temps = 1
function horloge() {
    // Si temps est plus petit ou égale à 10 on éxécute l'addition
    // et le console.log sinon rien
    if (temps <= 10){ // <, >, <=, >=, ==, !=
        temps = temps + 1
    //temps++ // temps--
    //temps += 1 // temps -=
    // J'additionne 1 à ma variable temps
    console.log(temps)
    }
    
   
    
        
    
} 

//setInterval(horloge, 1000)


// Je voudrais un compte à rebours qui commence à 50
// et qui fini à 0 et qui descend toutes les 2 secondes

var nombre = 50


function montre() {
    if (nombre >= 0) {
        console.log(nombre)
        nombre = nombre - 1
        // nombre -= 1
        // nombre --

    }
}

//setInterval(montre, 200)


// Array = Tableau
// Type de variable qui est elle même un tableau
//          0       1       2       3
var tab = [
    10, "Bonjour", 7.5, null]
// Cette variable est tableau qui contient 4 valeurs dans l'ordre
// 10
// "bonjour"
// 7.5
// null
console.log(tab[1])
 // On affiche la valeur qui se trouve à la position 1 qui est "Bonjour"
console.log(tab[3])
// On affiche la valeur qui se trouve à la position 3 qui est null
// Je voudrais un tableau qui se nomme chmilblik qui comporte
// 5 valeur de type srting et 5 valeur de typ int ou float

var chmilblik = [
    "Numéro", "Age", "Naissance", "Poids", "Taille",
    6, 42, 15, 72,
    1.70


]
console.log(chmilblik)
console.log(chmilblik.length) // Pour afficher le nombre de valeur du tableau

// getElementById séléctionne un élément qui à l'id défini sur
// animal dans ce cas
// addEventlistener créer une écoute d'évènement

let animal = "Autruche"
let temp = ""
document.getElementById('animal').addEventListener('click',function() {
    // Je regarde le texte qui ce trouve dans cet élément
       temp = document.getElementById('animal').innerHTML
     // Je modifie le texte qui ce trouve dans cet élément par la valeur
    // de la variable animal
    document.getElementById('animal').innerHTML = animal
    animal = temp
})