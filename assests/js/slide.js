let swiper1 = new Swiper('.swiper1', {
    navigation: {
        nextEl: '.swiper__button_next',
        prevEl: '.swiper__button_prev',
      },
    
      slidesPerView: 4,
    
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
    
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
    
        },
        // when window width is >= 640px
        985: {
          slidesPerView: 3,
    
        },
    
        1200: {
          slidesPerView: 4,
    
        }
      }
    });
    
    let swiper2 = new Swiper('.swiper2', {
    navigation: {
        nextEl: '.swiper__button_next',
        prevEl: '.swiper__button_prev',
    
      },
    
      slidesPerView: 1,
    
      // breakpoints: {
        
      //   1200: {
      //     slidesPerView: 1,
    
      //   }
      // }
    
    });