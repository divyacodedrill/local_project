$(document).ready(function() {
var owl = $('.main_banner');
owl.owlCarousel({
loop: true,
auto: true,
items:1,
nav:true,
 navText : ["<span><img src='http://localhost/testing/wp-content/uploads/2019/05/left.png'/></span>","<span><img src='http://localhost/testing/wp-content/uploads/2019/05/right.png'/></span>"],
    rewindNav : true,
    autoplay:true,
autoplayTimeout:2500,
autoplayHoverPause:true

});
 
var owltest = $('.testimonial');
owltest.owlCarousel({
loop: true,
auto: true,
items:1,
nav:true,
 navText : ["<span><img src='http://localhost/testing/wp-content/uploads/2019/05/left.png'/></span>","<span><img src='http://localhost/testing/wp-content/uploads/2019/05/right.png'/></span>"],
    rewindNav : true,
    autoplay:true,
autoplayTimeout:2500,
autoplayHoverPause:true

});


$('.owl-carousel.gallery').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true, 
    auto:true,
    items:6,
    nav:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        480:{
            items:3,
            nav:false
        },
        768:{
            items:4,
            nav:true,
            loop:false
        },
		992:{
            items:5,
            nav:true,
            loop:false
        },
		1200:{
            items:7,
            nav:true,
            loop:false
        }


    }
})
// NAVBAR TOGGLE

var window_width = $(window).width();
if(window_width < 992){
	$('.nav_toggle').show().click(function(){
		$('.navigation_top').slideToggle();
		$('.nav_toggle i').toggleClass('fa-bars fa-close');		
		})
	}






 // DATEPICKER SETTINGS
 
 setInterval(function(){
 var ab = $("#datepicker").val();
 	
 	if(ab.length > 2){
 		$("#datepicker1").removeAttr('disabled');
 	}
 	else{
 		$("#datepicker1").attr('disabled');
 	}
 },100)
 
 $.datepicker.setDefaults({minDate: new Date()});
          $('#datepicker').datepicker({onSelect: function(selectedDate) {
                var date = $(this).datepicker('getDate');
                if (date) {
                      date.setDate(date.getDate() + 1);
                }
                $('#datepicker1').datepicker('option', 'minDate', date || new Date());
          }});
          $('#datepicker1').datepicker({onSelect: function(selectedDate) {
                var date = $(this).datepicker('getDate');
                if (date) {
                      date.setDate(date.getDate() - 1);
                }
          }});


// SOCIAL MEDIA ON HOME BANNER HIDE ON CLICK ARROW

$('.toolbar .action-toggle').click(function(){
$('.toolbar').addClass('hides');
})
 
})
