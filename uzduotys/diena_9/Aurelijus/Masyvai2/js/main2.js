var keliautojas = ["Tomas", "Pietkus", 25, "VDU-inzinerija"];
console.log(keliautojas);
// var ilgis = keliautojas.length;
// console.log(ilgis);
// console.log(keliautojas.join(" , "));
// keliautojas.shift();
// console.log(keliautojas.toString());
// keliautojas.unshift("butelis vandens");
// console.log(keliautojas);
// keliautojas.pop();
// console.log(keliautojas);

keliautojas.push("butelis vandens");
console.log(keliautojas);
keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);
keliautojas.splice(3,1);
console.log(keliautojas);

var forMasyvas = [];
for(var i = 0; i<50; i++){
    forMasyvas.push(0);
}
console.log(forMasyvas);

var whileMasyvas = [];
var i = 0;
while(i<50){
 whileMasyvas.push(1);
 i++;
}
console.log(whileMasyvas);
var whileMasyvasKopija = whileMasyvas.slice(0);
//--------------------------------------------- 1 var
for (var i = 0; i<50 ; i++){
    i++;
    whileMasyvas[i]=3;
}
console.log(whileMasyvas);
//--------------------------------------------- 2 var
for(var i = 0; i<50; i+=2){
    whileMasyvasKopija.splice(i,1,3);
}
console.log(whileMasyvasKopija);
//--------------------------------------------  1 var
for(var i=0; i<50; i+=3){
    whileMasyvasKopija.splice(i,1,9);
}
console.log(whileMasyvasKopija);
//-------------------------------------------   2var
for(var i = 0; i<50; i++){
    i=i+2;
    whileMasyvas[i]=9;
}
console.log(whileMasyvas);


//Suskurti du masyvus naudojant for cikla ir juos sujungti kad atspausdintu sujungtus elementus
