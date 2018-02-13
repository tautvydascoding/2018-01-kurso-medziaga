console.log(" Labas ");


ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// UZDUOTIS
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti pranesima "Nepavyko rasti...Bandykite kita zodi"

// var x = names.indexOf("Rico");
// console.log("name" + x); // .indexOf iesko stalciaus numerio

//arba

// var arRadau = false; // false, "neradau"
// 	for (var i = 0; i < names.length; i++) { //name.length - grazina masyvo ilgi
// 		if (names[i] == "Rico"); { // names-kokiame masyve ieskai, [] - kiek iesko, 95% su while ir for bus "i" kad eitu per visus stalcius, "rico" - ko iesko
// 			arRadau = true; // kintamo reiksme pakeist kad parodyt jog rado
// 			console.log("radau. jo stalcius" + i); // issispausdinti i - kuri rado
// 		}
// 	} //rasom uz ciklo kad nekartotu daug kartu
// 	if (arRadau == false) {
// 		console.log("nepavyko rasti");
// 	}

// uzduotis:--------------------------
// 2) parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si numeri grazina
// eg: getStalciausNumeris(ieskomasTekstas)

// function getStalciausNumeris(x) {
// 	for (var i = 0; i < names.length; i++) { //name.length - grazina masyvo ilgi
// 		// console.log(x) // ziuret ka rodo
// 		// console.log(names[i]) // ziuret ka rodo
// 		// console.log("ieskau") // ziuret ka rodo
// 		if (x == names[i]); { // cia iesko i x nuejusio rico ir jei randa rezultatas eina i salyga returne i "i"// names-kokiame masyve ieskai, [] - kiek iesko, 95% su while ir for bus "i" kad eitu per visus stalcius, "rico" - ko iesko
// 			// console.log("ieskau") // sau uzsirasyt pasiziuret
// 			return i; // sitas i keliauja apacioj i getStalciausNumeris salia ("Rico")
// 		}
// 	} //rasom uz ciklo kad nekartotu daug kartu
// }
// var nr = getStalciausNumeris("Rico"); // sitas keliauja i x virsuj
// console.log("ieskomas numeris" + nr);
// var nr = getStalciausNumeris("Jonas");
// console.log("ieskomas numeris" + nr); // kai neranda grazinamas "-1"

// uzduots:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)



// var vardoNumeris = getStalciausNumeris("Freida");
// var pavarde = lastNames[vardoNumeris];
// console.log(pavarde)
// // arba

// var ilgis = names.length; // gauname masyvo ilgi
// for (var i = 0; i < ilgis; i++) { 
// 	var vardas = names[i]; // i dideja dideja kol randa
// 	if (vardas == "Freida");{
// 		var pavarde = lastNames[i];
// 		break; // nutraukia viena for cikla

// 	} 
// 	//for zona todel daug kartu vyktu
// }
// console.log("Freida pavarde:" + pavarde);

// 4) rasti visu zmoniu vardu "Rico" pavardes
//einu per visa vardu masyva
for (var i = 0; i < names.length; i++) {
	//ar i-tasis vardas yra rico
	if (names[i] == "Rico") { //names, ieksos visam masyve, reik [] kad nurodyt kuriam stalciuj, kadangi visuose, tai i
		var pavarde = lastNames[i];
		console.log("Rico pavarde yra:" + pavarde);
	}
}

// // 4)  // kintamas vardas
// var ieskomasVardas = "Rico";
// for (var i = 0; i < names.length; i++) {
// 	//ar i-tasis vardas yra rico
// 	if (names[i] == ieskomasVardas) { //names, ieksos visam masyve, reik [] kad nurodyt kuriam stalciuj, kadangi visuose, tai i
// 		var pavarde = lastNames[i];
// 		console.log("Rico pavarde yra:" + pavarde);
// 	}
// }

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];  isvesti ju pavardes ir vardus

var ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (var i = 0; i < ieskomiZmones.length; i++) {
	var ieskomasNr = ieskomiZmones[i];
	var vardas = names[ieskomasNr];
	var pavarde = lastNames[ieskomasNr];
	console.log(i + "ieskotas zmogus: " + vardas + " " + pavarde); //numeris ir vardas zmogaus
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }




