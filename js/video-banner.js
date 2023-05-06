// //// Initializing Video Banners /// //
(function () {

    var videoIframeHeight = $(".banner-video .video-iframe").height() + "px";
    var videoCover = $(".banner-video .banner-video-cover");
    videoCover.css("height", videoIframeHeight);

    videoCover.on("click", function (event) {

        $(this).hide();
        $(this).siblings(".video-iframe")[0].src += "?rel=0&autoplay=1&showinfo=0&controls=0";

    });



})();