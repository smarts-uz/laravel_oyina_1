// filter slide
new Splide( '.splide', {
	perPage: 11,
	perMove: 1,
    pagination: false,
    start: 0,

    breakpoints: {
      1920: {
        perPage: 16,
      },
      1536: {
        perPage: 11,
      },
      1280: {
        perPage: 8,
      },
      1024: {
        perPage: 6,
      },
      768: {
        perPage: 5,
      },
      648: {
        perPage: 3,
      },
    }

} ).mount();



var mediaswiper = new Swiper(".mediaswipe", {
  slidesPerView: 1,
  spaceBetween: 10,
  // cssMode: true,
  simulateTouch: true,

  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1.5,
      spaceBetween: 10
    },
    // when window width is >= 640px
    648: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    1280: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    1536: {
      slidesPerView: 3.5,
      spaceBetween: 30
    },
    1920: {
      slidesPerView: 3.5,
      spaceBetween: 30
    }
  }

});



// Media filter
var btnContainer = document.getElementById("filters-media");
var btns = btnContainer.getElementsByClassName("filter-option");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active-1");
    current[0].className = current[0].className.replace(" active-1", "");
    this.className += " active-1";
  });
}




function filtervidfoto(e) {
    const videos = document.querySelectorAll(".mediaswipe .swiper-wrapper .swiper-slide"); // select all animal divs
    let filter = e.target.dataset.filter; // grab the value in the event target's data-filter attribute
  
    videos.forEach(vid => {
      vid.classList.contains(filter) // does the vid have the filter in its class list?
      ?  vid.classList.remove('hidden') // if yes, make sure .hidden is not applied
      : vid.classList.add('hidden'); // if no, apply .hidden
    });
  };
 


//   Scholars filter
  var btnContainer1 = document.getElementById("filters-scholars");
var btns1 = btnContainer1.getElementsByClassName("filter-option-scholars");
for (var i = 0; i < btns1.length; i++) {
  btns1[i].addEventListener("click", function() {
    var current1 = document.getElementsByClassName("active-2");
    current1[0].className = current1[0].className.replace(" active-2", "");
    this.className += " active-2";
  });
}




function filterscholars(e) {
    const scholars = document.querySelectorAll(".mySwiper .swiper-wrapper .swiper-slide"); // select all animal divs
    let filter1 = e.target.dataset.filter; // grab the value in the event target's data-filter attribute
  
    scholars.forEach(scholar => {
      scholar.classList.contains(filter1) // does the scholar have the filter in its class list?
      ?  scholar.classList.remove('hidden') // if yes, make sure .hidden is not applied
      : scholar.classList.add('hidden'); // if no, apply .hidden
    });
  };
  
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    // cssMode: true,
    simulateTouch: true,

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 3.5,
        spaceBetween: 20
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 20
      },
      1280: {
        slidesPerView: 6,
        spaceBetween: 20
      },
      1536: {
        slidesPerView: 6.85,
        spaceBetween: 30
      },
      1920: {
        slidesPerView: 6.3,
        spaceBetween: 30
      }
    }

  });





  var swiperbooks = new Swiper(".booksslide", {
    slidesPerView: 1,
    spaceBetween: 10,
    // cssMode: true,
    simulateTouch: true,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      648: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 20
      },
      1280: {
        slidesPerView: 5,
        spaceBetween: 20
      },
      1536: {
        slidesPerView: 6.1,
        spaceBetween: 30
      },
      1920: {
        slidesPerView: 6.1,
        spaceBetween: 30
      }
    }
  });



  
//   Relevance filter
var btnContainer2 = document.getElementById("filters-relevance");
var btns2 = btnContainer2.getElementsByClassName("filter-option-relevance");
for (var i = 0; i < btns2.length; i++) {
  btns2[i].addEventListener("click", function() {
    var current2 = document.getElementsByClassName("active-4");
    current2[0].className = current2[0].className.replace(" active-4", "");
    this.className += " active-4";
  });
}




function filterrelevance(e) {
    const relevance = document.querySelectorAll(".relevance-slide .swiper-wrapper .swiper-slide"); // select all animal divs
    let filter2 = e.target.dataset.filter; // grab the value in the event target's data-filter attribute
  
    relevance.forEach(rel => {
      rel.classList.contains(filter2) // does the rel have the filter in its class list?
      ?  rel.classList.remove('hidden') // if yes, make sure .hidden is not applied
      : rel.classList.add('hidden'); // if no, apply .hidden
    });
  };
  
  var relevanceswiper = new Swiper(".relevance-slide", {
    slidesPerView: 1,
    spaceBetween: 10,
    // cssMode: true,
    simulateTouch: true,

    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      648: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1536: {
        slidesPerView: 3.5,
        spaceBetween: 30
      },
      1920: {
        slidesPerView: 3.5,
        spaceBetween: 30
      }
    }
  });
