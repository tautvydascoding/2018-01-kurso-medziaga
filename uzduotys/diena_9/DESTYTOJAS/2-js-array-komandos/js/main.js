console.log(" Labas ");


var phones = ["Nokia", "iphone", "motorola", "samsung"];
var ilgis = phones.length;
console.log( ilgis );


// masyvo sudejimas/pavertimas i String/tektas
var tekstas = phones.toString();
console.log(   tekstas  );
var tekstas2 = phones.join( " : ");   // " : " skyrinklis tarp masyvo stalciu reiksmiu
console.log( tekstas2 );


// delete last element
phones.pop();
console.log( phones.join(" ; ") );

phones.push("Huawei"); // idejimas i gala
phones.push("Panasonic"); // idejimas i gala
phones.push("Alkatel"); // idejimas i gala
console.log(phones.toString() );


// istrinimas masyvo priekio
phones.shift();
console.log( phones.join('...')); // ... - skyrinklis

phones.unshift('meskafonas');
console.log(  phones.join(" ;;")   );


delete phones[2];
console.log( phones  );

// splice delete
phones.splice( 2, 1); // istrinsime nuo 2 stalciaus( 2-tra iskaitant) , 1-na VISA STALCIU
console.log( phones  );
// splice insert - iterpimas
phones.splice( 2, 0, "raudonas", "melynas"); //  "2" - nuo kur; "0" - kiek istrinti, "ruadonas" - iterpiamas
console.log( phones  );
// splice - replace/ trininmas ir iterpimas
phones.splice(5, 1, "Sony"); // istrynem 5 ir vietoj jo iterpem "Sony"
console.log(phones);
//
