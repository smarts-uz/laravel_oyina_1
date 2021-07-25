lightGallery(document.getElementById('video-gallery_main'), {
    videojs: true,
    loadYoutubeThumbnail: true,
    youtubeThumbSize: 'default',
    loadVimeoThumbnail: true,
    vimeoThumbSize: 'thumbnail_medium',
});


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
