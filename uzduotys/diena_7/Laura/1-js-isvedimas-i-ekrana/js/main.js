console.log(" Labas ");

// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
//
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);


document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// querySelector - paieskos/selector komanda (veikia pagal CSS taiyskles pvz: '.class', '#id', )
// innerHTML - keicia surasto HTML elemento vidu

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// console.log(aukstis);

// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:
