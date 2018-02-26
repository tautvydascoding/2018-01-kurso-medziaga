console.log(" Ciao, belli! ");



$(document).ready(function(){
    $(".idphoto").hover(function(){
        $(".idphoto").animate({
            height: '600px'
        });
    });
});

$(document).ready(function(){
    $(".bgd1").animate({opacity:1}, 1000);
});

$(document).ready(function(){
    $('.pn2').fadeTo(4000, 1);
});

// ------END fades & animations-------

function validate(event) {
    if(document.myForm.reg_vardas.value==''){
        event.preventDefault();
        alert('Privaloma užpildyti visus laukus.');
        reg_vardas.focus();
        return false;
    } 

    if (!/^[a-zA-Z]*$/g.test(document.myForm.reg_vardas.value)) {
        event.preventDefault();
        alert('Vardas turi būti sudarytas iš raidžių.');
        reg_vardas.focus();
        return false;
    }

    if(document.myForm.reg_slaptazodis.value==''){
        event.preventDefault();
        alert('Privaloma užpildyti visus laukus');
        reg_slaptazodis.focus();
        return false;
    }

    var value = document.myForm.reg_slaptazodis.value;
        if (value.length < 3) {
            event.preventDefault();
            alert('Pateiktas slaptazodis yra per trumpas.');
            reg_slaptazodis.focus();
            return false;
        }
        if (value.length > 20) {
            event.preventDefault();
            alert('Pateiktas slaptazodis yra per ilgas.');
            reg_slaptazodis.focus();
            return false;
        }
        if (value.search(/[0-9]/) < 0) {
            event.preventDefault();
            alert('Slaptažodį turi sudaryti bent vienas skaičius.'); 
            return false;        
        }

    if(document.myForm.reg_elpastas.value==''){
        event.preventDefault();
        alert('Privaloma užpildyti visus laukus');
        reg_elpastas.focus();
        return false;
    } else {
        return true;
    }
} 

// ------END FORM VALIDATION-------

// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex); // showSlides pasiima var ir iskart keliauja zemyn iki tos funkcijos

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
}

// ------END CAROUSEL/ LIGHTBOX-------




// $(document).ready(function(){
//     $("#modalbtn1").click(function(){
//         $("#myModal2").modal();
//     });
// });

// $(".fade").delay(1000).animate({opacity:1}, 600);

// $(document).ready(function(){
//     $(".idphoto").toggle(function() {
//         $(this).animate({height: '500'});
//     }, function() {
//         $(this).animate({height: '600'});
//     });​
// });


// $(document).ready(function(){
//     $("#modalbtn1").click(function(){
//         $("#myModal2").modal();
//     });
// });

// $("#myModal").click(1000).animate({opacity:1}, 600);
