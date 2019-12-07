
$('.tab1-c').show();
$('.one').click(function(){
    $('.tab1-c').show();
    $('.tab2-c').hide();
  $('.tab3-c').hide();
  $('.tab4-c').hide();
})

$('.two').click(function(){
    $('.tab1-c').hide();
    $('.tab2-c').show();
  $('.tab3-c').hide();
  $('.tab4-c').hide();
})

$('.three').click(function(){
    $('.tab1-c').hide();
    $('.tab2-c').hide();
  $('.tab3-c').show();
  $('.tab4-c').hide();
})


  $('.carousel').carousel({
  interval: 6000,
  pause: "false"
});

  $('.carousel[data-type="multi"] .item').each(function() {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 2; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});


$(document).ready(function(){
 $('.collapse').on('shown.bs.collapse', function(){
 $(this).parent().find(".glyphicon-plus-sign").removeClass("glyphicon-plus-sign").addClass("glyphicon-minus-sign");
 }).on('hidden.bs.collapse', function(){
 $(this).parent().find(".glyphicon-minus-sign").removeClass("glyphicon-minus-sign").addClass("glyphicon-plus-sign");
 });       
});



  $(function () {
    $('#myCarousel').carousel({
        interval:2000,
        pause: "false"
    });
    
    $('#playButton').click(function () {
        $('#myCarousel').carousel('cycle');
    });
    $('#pauseButton').click(function () {
        $('#myCarousel').carousel('pause');
    });
});
