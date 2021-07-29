$(document).ready(function(){
    // show hide button on scroll
    $(window).scroll(function(){
      if($(this).scrollTop() > 200){
        $('.scrollToTop').fadeIn();
      }
      else{
        $('.scrollToTop').fadeOut();
      }
    });
    //smooth scrolling to top
    $('.scrollToTop').click(function(){
      $('html, body').animate({scrollTop: 0}, 1000)
    })
  });

  document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('header').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
    })
  });

 
  $(".owl-carousel").owlCarousel({
    nav: true,
    navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>'
    ],
    margin:20,
    dots: false,
    responsiveClass: true,
    autoplay: true,
    autoplaySpeed: 3000,
    navSpeed: 2000,
    loop: true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
            nav: true
        }
    }
});