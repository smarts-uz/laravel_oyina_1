


lightGallery(document.getElementById('video-gallery'), {
  videojs: true,
});


// filter slide
new Splide( '.mediateka_splide', {
  perPage: 10,
  perMove: 3,
  pagination: false,
  start: 0,

  breakpoints: {
    1920: {
      perPage: 8,
    },
    1536: {
      perPage: 7,
    },
    1280: {
      perPage: 6,
    },
    1024: {
      perPage: 5,
    },
    768: {
      perPage: 4,
    },
    648: {
      perPage: 3,
    },
  }

} ).mount();

jQuery(function ($) {

  $("document").ready(function() {
    $("[data-fancybox]").fancybox({
      baseClass: "awesome-gally",
      protect: true,
      toolbar: true,
      preventCaptionOverlap: true,
      // infobar: true,
      idleTime: 100,
      thumbs : {
        autoStart : true,
        axis: "x"
      },
      zoomOpacity: false,
      animationEffect: false,
      buttons: [
        "share",
        "download",
        "close"
      ],

    });
  });
});
