console.log(" Labas ");

var phones = ["Nokia","Samsung","Iphone","Siemens","Motorola"];
var ilgis = phones.length;
console.log(phones);
document.write(phones , " <br>");

var tekstas = phones.toString();
document.write(tekstas);

var tekstas2 = phones.join(", ");  //atskiriami ', tarpu'
document.write(tekstas2);

//pop
phones.pop();
console.log(phones.join("; "));

//push
phones.push("Huawei");
phones.push("JCB");
console.log(phones.join(": "));

//shift
phones.shift();
console.log(phones.toString());

//unshift
phones.unshift("Meskafonas");
document.write(phones.toString());
console.log(phones.toString());

//delete
delete phones[2];   //phones[2] = " ";
console.log(phones);

//splice delete
phones.splice(2,1); //istrinsim nuo 2 stalciaus viena Stalciu
console.log(phones.join("::"));
//splice insert
phones.splice(2, 1, "raudonas", "melynas");// 2- nuo kur, 1 - kiek istrinti
console.log(phones.join("::"));
//splice replace
phones.splice(5, 1, "Radio"); //istrynem nuo 6, istrynem viena, pakeitem i Radio
console.log(phones.join("::"));

//NETAISYKLINGA
var neteisingaKopija = phones;//DAZNIAUSIAI NENAUDOJAMA    //istikruju nesukuria naujos celes, bet sukuria nauja kintamaji su tuo paciu adresu y kompiuterio atminti
console.log("originalas ", phones);
console.log("replika " , neteisingaKopija);

phones[0] = "test";
console.log("originalas ", phones);
console.log("replika " , neteisingaKopija);

//TAISYKLINGA   //slice() ar cat()
var teisingaKopija1 = phones.slice(0);   // 1 skaicius - nuo kurios vietos kopijuoti  NOTE nepamirsti issisaugoti
console.log("tikroji kopija = ", teisingaKopija1);
var teisingaKopija2 = phones.slice(2, 5);   // 1 skaicius - nuo kurios vietos kopijuoti, 2 skaicius iki kelinto elemento
var teisingaKopija2 = phones.slice(-3);     //3 nuo galo
console.log("tikroji kopija = ", teisingaKopija2);

phones.sort();  //rikiavimas nuo a iki z !!! NOTE netinkamas skaiciams, nes skaicius vercia i string
                                                //String galima istaisyti
console.log(phones);
phones.push(9);
phones.push(1);
phones.sort(function(a,b) {return a-b;} );            //funkcija be pavadinimo suveiks tik karta ir iskarto, nes paskui negalesi issikviest
console.log(phones);
