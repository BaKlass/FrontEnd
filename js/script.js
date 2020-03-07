$(document).ready(function(){
  $(".selectfield").chosen({rtl:true});
});
$('.modal').on('shown.bs.modal', function () {
  $(".modal .selectfield").chosen("destroy");
    $(".modal .selectfield").chosen({rtl:true});

});
function alertClose(sw){
  if (sw == 0) {
    $("#alertDanger").slideUp(500);
  }
  else if (sw == 1) {
    $("#alertSuccess").slideUp(500);
  }
}
// unreadMessage Modal
$(window).on('load',function(){
$('#unreadMessage').modal('show');
});

// Back to top
var btn = $('#buttonTop');

$('#backToTop').scroll(function() {
  if ($('#backToTop').scrollTop() > 10) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('#backToTop').animate({scrollTop:0}, '10');
});
