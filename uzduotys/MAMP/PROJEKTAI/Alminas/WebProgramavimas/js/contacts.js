$(document).ready(function(){
$('.banner_text').fadeIn(4000, "swing");
});
$('.copy_button').mousemove(function(e) {
var hovertext = $(this).attr('hovertext');

$('.hover_div').text(hovertext).show();
$('.hover_div').css('top', 70).css('left', 50);
}).mouseout(function(event) {
    $('.hover_div').hide();
});

function copy(e) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(e).text()).select();
  document.execCommand("copy");
  $temp.remove();
  alert('Sėkmingai nukopijuota į klaviatūrą.');
}

function validate(){
    var name = $('[name="vardas"]').val();
    var telnr = $('[name=telnr]').val();
    var email = $('[name=emailas]').val();
    var error = $('.error_para');

    if(name == "" || email == "" || telnr==""){
    error.text("Turite užpildyti visus laukelius");
      return false;
    }else{
      if((name.length > 20) || (name.length <= 3)){
         error.text("Vardas turi būti nuo 4 iki 20-ies simbolių");
        return false;
      }
      else if((telnr.length) >= 13 || (telnr.length < 8)){
          error.text("Tel. numeris turi būti nuo 8-erių iki 13-os simbolių");
          return false;
      }
      else if((email.length > 30) || (email.length <= 5)){
          error.text("El. pašto adresas turi būti nuo 5-erių iki 30-ies simbolių");
          return false;
      }
      else{
        return true;
      }
  }
}
