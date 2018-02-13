console.log(" Labas ");

var phones = ["nokia", "iphone", "motorola", 'samsung'];
var ilgis = phones.length;
console.log(ilgis);

//
var tekstas = phones.toString();
console.log(tekstas);
//arba
var tekstas1 = phones.join(" : ");

// delete last element, plius nereik nurodyt var nes join pavercia i string
phones.pop();
console.log(phones.join(" "));

// push a new element to the end of the list
phones.push("huawei");
phones.push("panasonic");
phones.push("leagoo");
console.log(phones.toString(" "));

// shift pradžioje istriname
phones.shift();
console.log(phones.join("...")); //- skyriklis

//unshift pradzioje ideda
phones.unshift("meskafonas");
console.log(phones.join("   "));

// delete antro stalciaus turini
delete phones[2];
console.log(phones);

// splice delete
phones.splice(2, 1);
console.log(phones);

// splice insert
phones.splice(2, 0, "raudonas", "melynas"); //"2" nuo kur "0" kiek istrint "raudona" - kas idedama
console.log(phones);

// splice replace - trynimas ir iterpimas
phones.splice(5, 1, "sony"); //istrynem 5 ir vietoj jo iterpem sony
console.log(phones);

//

// bandom kurti masyvo kopija
var kopija = phones; // NEGALIMA
console.log("originalas", phones);
console.log("kopija", kopija);
// kas bus jeigu kopija pakeisime? - ir kopija ir originalas ziuri i ta pacia ram cele, tai pakeitus vienam duomeny kis visur
kopija[0] = "sugedo";
console.log("originalas", phones);
console.log("kopija", kopija);
//
// phones = "";
// console.log("originalas", phones);
// console.log("kopija", kopija);

// taisyklina kopija, asmenines kopijos kurimas
// slice() arba cat()
var tikraKopija = phones.slice(0); // 0 - nuo kurio kopijuoti NOTE: nepamirsti issisaugoti
console.log("tikraKopija", tikraKopija);
var tikraKopija = phones.slice(3, 5); // nuo 3 iki 5; veikia su minusinem reiksmem (-3) - trys nuo galo
console.log("tikraKopija", tikraKopija);

// cat - keliu masyvu sujungimas

// sort() rikiuoja
phones.sort(); //surikiuoja nuo a iki z !!! netinkamas skaiciams, nes skaicius vercia i stringa galima taisyt
console.log(phones);

phones.push(9);
phones.push(1);
phones.sort (function(a, b) {return a - b});
console.log(phones);
