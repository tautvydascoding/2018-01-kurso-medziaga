console.log(" Labas ");


var prekiautojai = []; //tuscias array

prekiautojai[0] = "IKI";
prekiautojai[1] = "Maxima";
prekiautojai[2] = "Norfa";
prekiautojai[3] = "Rimi";
prekiautojai[50] = "Lidl";

console.log("prekybos centrai:", prekiautojai);


prekiautojai[1] = "Cia";
console.log("prekybos centrai:", prekiautojai);

var temp = prekiautojai[3];
prekiautojai[3] = prekiautojai[2];
prekiautojai[2] = temp;
console.log("prekybos centrai:", prekiautojai);


function printPrekiautojai(x, y) {
    var temp = prekiautojai[y];
    prekiautojai[y] = prekiautojai[x];
    prekiautojai[x] = temp;

}
printPrekiautojai(0, 3);
console.log("prekybos centrai", prekiautojai);
