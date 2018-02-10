console.log(" Labas ");


var prekiautojai = []; //empty masyvas;
prekiautojai[0] = "IKI"; // ideti reiksme;
console.log ( "prekybos centrai", prekiautojai );
prekiautojai[1] = "Maxima";
prekiautojai[2] = "Norfa";
prekiautojai[3] = "Lidl";
prekiautojai[50] = "Cia MARKET";

console.log ( "prekybos centrai", prekiautojai );


///PAKEISTI pirma prekybos centra;

prekiautojai[1] = "Rimi";
console.log ( "prekybos centrai", prekiautojai );


/// B) sukeisti antro ir trecio stalciaus reiksmes. negalima rasyti rankomis Stringu!!
//nes duomenys kinta.

var temp = prekiautojai[3];  ///temp-laikinai dingsta
prekiautojai[3] = prekiautojai[2];
prekiautojai[2] = temp;

//
// //
// // var x = prekiautojai[2];  // x pamestas ((Norfa))
// // prekiautojai [2] = prekiautojai [3]; //2 pavadiniams perkeliama i trecia
// // prekiautojai[3] = x; //
// // console.log ( "prekybos centrai", prekiautojai );
// //
// // var x = prekiautojai[0];
// // prekiautojai[0] = prekiautojai[3];
// // var y = prekiautojai[3];
// // prekiautojai[3] = prekiautojai[0];
// console.log ( "prekybos centrai", prekiautojai );

/// C) padaryti B) uzdaviniui f-ija sukeistiMasyvo2Elementus(x,y);

function sukeistiMasyvo2Elementus(a,b){
        var x = prekiautojai[a];  // x pamestas ((Norfa))
        prekiautojai [a] = prekiautojai [b]; //2 pavadiniams perkeliama i trecia
        prekiautojai[b] = x;
}
sukeistiMasyvo2Elementus(2, 3);
console.log ( "prekybos centrai", prekiautojai );
sukeistiMasyvo2Elementus(1, 0);
console.log ( "prekybos centrai", prekiautojai );


////////////////////////////////////////
