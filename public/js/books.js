
 // filter slide
 new Splide( '.books_splide', {
	perPage: 8,
	perMove: 1,
    pagination: false,
    start: 0,

    breakpoints: {
      1920: {
        perPage: 15,
      },
      1536: {
        perPage: 14,
      },
      1280: {
        perPage: 13,
      },
      1024: {
        perPage: 12,
      },
      768: {
        perPage: 10,
      },
      648: {
        perPage: 8,
      },
    }

} ).mount();
