$(document).ready(function(){

    //owl.carosel
    
    
    $('.slider_section').owlCarousel({
        loop:true,
        margin:5,
        responsiveClass:true,
        autoplay:3000,
        responsive:{
            0:{
                items:3,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:true
            }
        }
    })
    
    
    
    
    
        });