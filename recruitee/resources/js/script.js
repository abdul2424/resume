var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    
    grabCursor: 'true',
    fade: 'true',
    centerSlide: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      
      
    },
    breakpoints:{
0:{
    slidesPerView: 1,
},
520: {
    slidesPerView: 2,
},
950: {
    slidesPerView: 3,
},

    },
});


var swiper = new Swiper(".slide-content1", {
    slidesPerView: 3,
    spaceBetween: 25,
    
    grabCursor: 'true',
    fade: 'true',
    centerSlide: 'true',
    pagination: {
      el: ".swiper-pagination1",
      clickable: true,
      
      
    },
    breakpoints:{
        0:{
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
        
            },
});


