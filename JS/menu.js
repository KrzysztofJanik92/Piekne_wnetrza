var  mn = $("#mainNav");
var mobile = $('#hamburger');
mns = "main-nav-scrolled";
hdr = $('.header').height();



  $(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
  mn.addClass(mns);
  } else {
  mn.removeClass(mns);
  }
});

$('#hamburger').click(function(){
  var nav = $('#mobileNav');
  
  nav.slideToggle(200);
})