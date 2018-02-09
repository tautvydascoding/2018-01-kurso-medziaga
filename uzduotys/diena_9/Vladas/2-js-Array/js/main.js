console.log(" Labas ");


var phones = ["Nokia", "iphone", "samsung", "alcatel"];
var ilgis = phones.length;
console.log("ilgis", ilgis);


var tekstas = phones.toString();
console.log("tekstas", tekstas);

var tekstas2 = phones.join(" ");
console.log(tekstas2);

phones.pop();
console.log(phones.join("."));

phones.push("Motorola");
phones.push("Siemens");
phones.push("Htc");
console.log(phones.join("-"));

phones.shift();
console.log(phones.join(":"));

phones.unshift("Huawei");
console.log(phones.join("::"));

delete phones[3];
console.log(phones);

phones.splice(2, 1); //istrins nuo 2 viena stalciu visiskai
console.log(phones);


phones.splice(2, 0, "motorola", "panasonic");  // dades nuo antro stalciaus, nieko netrins nes 0.
console.log(phones);

phones.splice(2, 1, "Tele2");   //istrins ir ides (antras skaicius visada trina)
console.log(phones);

var kopija = phones;
console.log("originalas", phones);
console.log("kopija", kopija);

// kopija[1] = "sugedo";                  //kas bus jei pakeisim kopija
// console.log("originalas", phones);
// console.log("kopija", kopija);


// slice arba cat kopijos kurimmui
var tikraKopija = phones.slice(2, 5);  //kopijuoja nuo-iki. jeigu skaicius
                                        //su - kopijuoja elementus nuo galo.
console.log("Tkopija", tikraKopija);
//cat keliu masyvu sujungimas


//sort - rykiavimas
phones.sort(); //surikiuoja nuo a iki z. skaiciams netinka(ne skaicius vercia stringais)
                //patisyti galima
console.log(phones);

phones.push(9);
phones.push(1);
phones.sort(function(a, b){return a - b;} );
console.log(phones);
