console.log(" Labas ");


var prekiautojai = []; //empty array

prekiautojai[0] = "Maxima";
prekiautojai[1] = "IKI";
prekiautojai[2] = "Rimi";
prekiautojai[3] = "Norfa";
prekiautojai[50] = "Cia Market";

// pervadinti pirma stalciu
prekiautojai[0] = "Turgaus bobote";

// B sukeisti antro ir trecio reiksmes vietomis (negalima rankomis rasyti stringu)
var x = prekiautojai[1]
prekiautojai[1] = prekiautojai[2];
prekiautojai[2] = x;
console.log("prekybos centai:", prekiautojai);

// sukurti funkcija kuri sukeistu du elementus
function vietuSukeitimas (i, j) {
    if (i >= 0 && j >= 0 && i !== j){
        var x = prekiautojai[i];
        prekiautojai[i] = prekiautojai[j];
        prekiautojai[j] = x;
        console.log(prekiautojai);
    } else {
        return "Iveskite 0, teigiama reiksme ir skirtingas reiksmes"
    }
}

