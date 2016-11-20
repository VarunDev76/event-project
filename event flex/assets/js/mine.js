var sections = $('header')
  , nav = $('.navbar-fixed-top')
  , nav_height = nav.outerHeight();





$(document).ready(function(){

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();
//   console.log(first_section_height);

});


  $('li a').on('click', function () {
    var $el = $(this);
    var id = $el.attr('href');
      // console.log(nav_height);
    $('html, body').animate({
      scrollTop: $(id).offset().top - nav_height + 100
    }, 1000);
    
    return false;
  });


});