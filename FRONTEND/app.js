$(document).ready(function(){
//HERO SLIDER

$('#hero-slider').owlCarousel({
    loop:true,
    margin:0,   
    nav:true,
    items:1,
    dots:false,
    smartSpeed: 1000,
    navText:['PREV', 'NEXT'],
    responsive:{
        0:{
            
        },
        600:{
            
        },
        1000:{
            
        }
    }
})
});

$('#partenaire').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})