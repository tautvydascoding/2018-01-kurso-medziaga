console.log(" Labas ");


var prekiautojai = [];
prekiautojai = ["IKI","Maxima","Rimi","Jonukas","Maryte","Norfa","Trugelis","Akropolis","Mega"];
prekiautojai[50] = "Lidl";
console.log(prekiautojai);
prekiautojai[1] = "Bobute";
console.log(prekiautojai);
prekiautojai.unshift("Rezervuota");
console.log(prekiautojai);

// prekiautojai[1] = prekiautojai [52];    //iki tampa 10
// prekiautojai[3] = prekiautojai [1];     //rimi tampa 1
// prekiautojai[52] = prekiautojai [3];    //iki tampa 3
// console.log(prekiautojai);



//Pasikartoti butinai
var tarpinis = prekiautojai[3];     //tarpiniam priskiriama rimi
prekiautojai[3] = prekiautojai[2];  //rimi priskiriama bobute
prekiautojai[2] = tarpinis;         //tusciam priskiriamas tarpinis//bobutei priskiriama rimi
console.log(prekiautojai);

function sukeistiMasyvo2elementus(x,y){
    var temp = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = temp;
    console.log(prekiautojai);
}
sukeistiMasyvo2elementus(2,3);
// console.log(prekiautojai);
sukeistiMasyvo2elementus(1,4);
sukeistiMasyvo2elementus(0,4);
